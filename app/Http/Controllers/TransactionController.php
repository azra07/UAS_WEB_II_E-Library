<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
public function index(Request $request)
    {
        // 1. Start the query with relationships loaded
        $query = Borrow::with(['user', 'details.book'])->latest();

        // 2. SEARCH LOGIC (Borrower Name, Book Title, or Transaction ID)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                // Search by exact Transaction ID (removes 'TRX-' if typed)
                $cleanId = ltrim(str_replace('TRX-', '', strtoupper($search)), '0');
                if (is_numeric($cleanId)) {
                    $q->where('id', $cleanId);
                }

                // Search by User Name
                $q->orWhereHas('user', function($userQuery) use ($search) {
                    $userQuery->where('name', 'like', "%{$search}%");
                });

                // Search by Book Title
                $q->orWhereHas('details.book', function($bookQuery) use ($search) {
                    $bookQuery->where('judul', 'like', "%{$search}%");
                });
            });
        }

        // 3. STATUS FILTER LOGIC
        if ($request->filled('status') && $request->status !== 'All Statuses') {
            if ($request->status === 'Returned') {
                $query->whereNotNull('tanggal_kembali');
            } elseif ($request->status === 'On Loan') {
                $query->whereNull('tanggal_kembali')->whereDate('due_date', '>=', today());
            } elseif ($request->status === 'Overdue') {
                $query->whereNull('tanggal_kembali')->whereDate('due_date', '<', today());
            }
        }

        // 4. DATE FILTER LOGIC (Filters by Issue Date)
        if ($request->filled('date')) {
            $query->whereDate('tanggal_pinjam', $request->date);
        }

        // 5. Execute query with Pagination (10 per page)
        $transactions = $query->paginate(10)->withQueryString();

        // Calculate Ledger Stats (Now using accurate due_date!)
        $activeLoans = Borrow::whereNull('tanggal_kembali')->count();
        $returnedToday = Borrow::whereNotNull('tanggal_kembali')->whereDate('tanggal_kembali', today())->count();
        $dueToday = Borrow::whereNull('tanggal_kembali')->whereDate('due_date', today())->count();
        $overdue = Borrow::whereNull('tanggal_kembali')->whereDate('due_date', '<', today())->count();

        return view('admin.transactions', compact('transactions', 'activeLoans', 'returnedToday', 'dueToday', 'overdue'));
    }
    public function create()
    {
        // Fetch all members to populate the dropdown
        $members = \App\Models\User::where('role', 'user')->get();
        
        // Fetch ONLY books that are currently available to prevent double-booking
        $books = \App\Models\Book::where('status', 'Available')->get();
        
        return view('admin.transactions.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        // 1. Validate the form, ensuring due_date is AFTER tanggal_pinjam
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'tanggal_pinjam' => 'required|date',
            'due_date' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        // 2. Create the Borrow record with the custom dates
        $borrow = Borrow::create([
            'user_id' => $validated['user_id'],
            'tanggal_pinjam' => $validated['tanggal_pinjam'],
            'due_date' => $validated['due_date'],
            'tanggal_kembali' => null, 
        ]);

        // 3. Link the specific book
        \App\Models\DetailPeminjaman::create([
            'borrow_id' => $borrow->id,
            'book_id' => $validated['book_id'],
        ]);

        // 4. CHANGE THE BOOK STATUS! (This connects to your Catalog)
        \App\Models\Book::where('id', $validated['book_id'])->update([
            'status' => 'On Loan'
        ]);

        return redirect()->route('transactions.index')->with('success', 'Loan processed successfully!');
    }
    public function returnBook(\App\Models\Borrow $borrow)
    {
        // 1. Stamp the return date
        $borrow->update([
            'tanggal_kembali' => now(),
        ]);

        // 2. Find the book attached to this loan and make it available again
        $detail = \App\Models\DetailPeminjaman::where('borrow_id', $borrow->id)->first();
        if ($detail) {
            \App\Models\Book::where('id', $detail->book_id)->update([
                'status' => 'Available'
            ]);
        }

        return redirect()->back()->with('success', 'Book successfully returned!');
    }
}
