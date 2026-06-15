<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;

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
        return view('User.Home', compact('books', 'categories'));
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
}
