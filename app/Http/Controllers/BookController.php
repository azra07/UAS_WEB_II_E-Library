<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use App\Models\Borrow;
use App\Models\DetailPeminjaman;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
    {
        // Start building the query, but don't fetch yet
        $query = \App\Models\Book::with('category');

        // 1. Search Bar Logic (Looks at Judul or ISBN)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('isbn', 'like', "%{$search}%");
            });
        }

        // 2. Category Dropdown Logic
        if ($request->filled('category') && $request->category !== 'All') {
            $query->where('category_id', $request->category);
        }

        // 3. Status Dropdown Logic
        if ($request->filled('status') && $request->status !== 'All') {
            $query->where('status', $request->status);
        }

        // 4. Language Dropdown Logic
        if ($request->filled('language') && $request->language !== 'All') {
            $query->where('language', $request->language);
        }

        // Execute the query and get the results
        $books = $query->latest()->get();
        
        // We also need all categories to populate the filter dropdown itself!
        $categories = \App\Models\Category::all();

        return view('admin.catalog', compact('books', 'categories'));
    }

    public function userDashboard(Request $request)
    {
        // Ambil query pencarian dan kategori dari URL
        $search = $request->query('search');
        $categoryFilter = $request->query('category');

        // Query dasar buku beserta relasi ratingnya
        $query = Book::with(['category', 'publisher', 'ratings']);

        // Jika ada input pencarian
        if (!empty($search)) {
    $query->where(function($q) use ($search) {
        $q->where('judul', 'like', '%' . $search . '%')
          ->orWhere('penulis', 'like', '%' . $search . '%')
          ->orWhere('isbn', 'like', '%' . $search . '%');
    });
}

        // Jika kategori difilter dan bukan 'all'
        if (!empty($categoryFilter) && $categoryFilter !== 'all') {
            $query->where('category_id', $categoryFilter);
        }

        // Ambil hasil dengan pagination (misalnya 10 buku per halaman)
        $books = $query->paginate(10)->withQueryString();

        // Ambil semua kategori untuk dropdown filter di view
        $categories = Category::all();

        // Mengembalikan view User.Home (perhatikan kapital 'U' sesuai folder Anda)
        $title = "The Scholar's Catalog";
        return view('User.Home', compact('books', 'categories', 'title'));
        
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        $publishers = \App\Models\Publisher::all();
        return view('admin.books.create', compact('categories', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $validated = $request->validate([
                'judul' => 'required|string|max:255',
                'penulis' => 'required|string|max:255',
                'isbn' => 'required|string|max:50',
                'language' => 'required|string',
                'category_name' => 'required|string|max:255',
                'publisher_id' => 'required|exists:publishers,id',
                'cover_image' => 'nullable|image|max:2048', // Ensure it's an image under 2MB
            ]);

            // Handle the Image Upload
            $imagePath = null;
            if ($request->hasFile('cover_image')) {
                // Stores the file in storage/app/public/covers
                $imagePath = $request->file('cover_image')->store('covers', 'public'); 
            }

            $category = \App\Models\Category::firstOrCreate(
                ['nama_kategori' => $validated['category_name']],
                ['deskripsi' => 'Auto-generated category']
            );

            \App\Models\Book::create([
                'judul' => $validated['judul'],
                'penulis' => $validated['penulis'],
                'isbn' => $validated['isbn'],
                'language' => $validated['language'],
                'status' => 'Available',
                'category_id' => $category->id,
                'publisher_id' => $validated['publisher_id'],
                'cover_image' => $imagePath, // Save the file path to the database
            ]);

            return redirect()->route('buku.index')->with('success', 'Book successfully saved!');
        }

    /**
     * Display the specified resource.
     */
public function show(string $id)
    {
        $book = \App\Models\Book::with(['category', 'publisher'])->findOrFail($id);
        return view('admin.books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $categories = \App\Models\Category::all();
        $publishers = \App\Models\Publisher::all();
        
        return view('admin.books.edit', compact('book', 'categories', 'publishers'));
    }

    public function update(Request $request, $id)
    {
        $book = \App\Models\Book::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isbn' => 'required|string|max:50',
            'language' => 'required|string',
            'category_name' => 'required|string|max:255',
            'publisher_id' => 'required|exists:publishers,id',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        // Handle Image Replacement
        if ($request->hasFile('cover_image')) {
            // Delete the old image from storage if it exists
            if ($book->cover_image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($book->cover_image);
            }
            // Save the new image
            $book->cover_image = $request->file('cover_image')->store('covers', 'public');
        }

        $category = \App\Models\Category::firstOrCreate(
            ['nama_kategori' => $validated['category_name']],
            ['deskripsi' => 'Auto-generated category']
        );

        $book->update([
            'judul' => $validated['judul'],
            'penulis' => $validated['penulis'],
            'isbn' => $validated['isbn'],
            'language' => $validated['language'],
            'category_id' => $category->id,
            'publisher_id' => $validated['publisher_id'],
            // Notice we don't update 'status' here so we don't accidentally overwrite an active loan!
        ]);

        return redirect()->route('buku.index')->with('success', 'Book successfully updated!');
    }

    public function destroy($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        
        // Clean up the image file from the server before deleting the database record
        if ($book->cover_image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($book->cover_image);
        }
        
        $book->delete();
        
        return redirect()->route('buku.index')->with('success', 'Book successfully deleted!');
    }

    public function userShow($id)
    {
        // 1. LAZY CHECK: Cek semua peminjaman aktif yang sudah melewati due_date
        $overdueLoans = DetailPeminjaman::where('book_id', $id)
            ->whereHas('borrow', function($query) {
                $query->whereNull('tanggal_kembali')
                      ->where('due_date', '<', now());
            })->get();

        if ($overdueLoans->isNotEmpty()) {
            foreach ($overdueLoans as $loan) {
                $borrow = $loan->borrow;
                $borrow->tanggal_kembali = now();
                $borrow->save();
            }
            // Kita TIDAK perlu mengubah status buku ke 'Available' di sini karena buku selalu 'Available' secara global
        }

        // 2. Ambil data buku terbaru beserta ulasannya
        $book = Book::with(['category', 'publisher', 'ratings.user'])->findOrFail($id);

        return view('User.Detail_buku', compact('book'));
    }

    /**
     * Memproses Transaksi Peminjaman Buku (Borrow) Spesifik per User
     */
    public function borrowBook($id)
    {
        $book = Book::findOrFail($id);

        // CEK APAKAH USER INI SUDAH MEMINJAM BUKU INI DAN BELUM MENGEMBALIKANNYA
        $alreadyBorrowed = DetailPeminjaman::where('book_id', $id)
            ->whereHas('borrow', function($query) {
                $query->where('user_id', Auth::id())
                      ->whereNull('tanggal_kembali');
            })->exists();

        if ($alreadyBorrowed) {
            return redirect()->back()->with('error', 'You have already borrowed this book.');
        }

        // 1. Buat data transaksi di tabel borrows
        $borrow = new Borrow();
        $borrow->user_id = Auth::id();
        $borrow->tanggal_pinjam = now();
        $borrow->due_date = now()->addDays(7); // Masa pinjam 1 minggu
        $borrow->tanggal_kembali = null;
        $borrow->save();

        // 2. Buat rincian data di tabel detail_peminjaman
        $detail = new DetailPeminjaman();
        $detail->borrow_id = $borrow->id;
        $detail->book_id = $id;
        $detail->save();

        // CATATAN: KITA TIDAK MENGUBAH $book->status = 'Borrowed' agar user lain tetap bisa meminjam buku ini secara online!

        return redirect()->back()->with('success', 'Book successfully borrowed! Please return it by ' . $borrow->due_date->format('M d, Y') . ' (7 days).');
    }

    /**
     * Memproses Simpan & Hapus Daftar Bacaan (Toggle Reading List menggunakan Session)
     */
    public function toggleReadingList($id)
    {
        // Menggunakan session array agar praktis, instan, dan tanpa perlu membuat migrasi baru
        $readingList = session()->get('reading_list', []);

        if (in_array($id, $readingList)) {
            // Jika sudah ada, hapus dari daftar (Klik Kedua kalinya)
            $readingList = array_diff($readingList, [$id]);
            session()->put('reading_list', $readingList);
            return redirect()->back()->with('success', 'Book removed from your Reading List.');
        } else {
            // Jika belum ada, tambahkan ke daftar (Klik Pertama kalinya)
            $readingList[] = $id;
            session()->put('reading_list', $readingList);
            return redirect()->back()->with('success', 'Book added to your Reading List!');
        }
    }

    public function storeReview(Request $request, $id)
    {
        // 1. Validasi input ulasan dari form
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        // 2. Simpan ulasan baru ke tabel ratings
        $rating = new Rating();
        $rating->book_id = $id;
        $rating->user_id = Auth::id();
        $rating->rating = $request->rating;
        
        // PERBAIKAN DI SINI: Mengisi kolom 'ulasan' dengan input 'review'
        $rating->ulasan = $request->review; 
        
        $rating->save();

        // 3. Kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Thank you! Your review has been submitted.');
    }

    public function userCategories()
    {
        $categories = Category::all();
        // Mengarah ke resources/views/User/Kategori.blade.php
        return view('User.Kategori', compact('categories'));
    }

    /**
     * Menampilkan Halaman Daftar Bacaan (Reading List) User
     */
    public function userReadingList()
    {
        // Mengambil semua ID buku yang disimpan user di dalam session reading_list
        $bookIds = session()->get('reading_list', []);
        
        // Query hanya buku-buku yang ID-nya ada di dalam daftar bacaan user
        $books = Book::with(['category', 'publisher', 'ratings'])
            ->whereIn('id', $bookIds)
            ->paginate(10);
            
        $categories = Category::all();
        $title = "My Reading List"; // Mengubah judul halaman secara dinamis

        // Menggunakan kembali (reuse) tampilan Home agar praktis dan langsung berfungsi dengan desain indah Anda
        return view('User.Home', compact('books', 'categories', 'title'));
    }
}
