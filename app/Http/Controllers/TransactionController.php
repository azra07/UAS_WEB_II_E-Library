<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Fetch all borrows. 
        // We use 'with' to eagerly load the User (borrower) AND the details (which contains the Book)
        // We sort by latest first.
        $transactions = Borrow::with(['user'])->latest()->get();

        // Calculate Ledger Stats
        $activeLoans = Borrow::whereNull('tanggal_kembali')->count();
        $returnedToday = Borrow::whereNotNull('tanggal_kembali')->whereDate('tanggal_kembali', today())->count();
        
        // Due Today: Borrows where the estimated due date (assume 14 days from tanggal_pinjam) is today, and not yet returned
        $dueToday = Borrow::whereNull('tanggal_kembali')
                          ->whereDate('tanggal_pinjam', today()->subDays(14))
                          ->count();
                          
        // Overdue: Borrows older than 14 days and not yet returned
        $overdue = Borrow::whereNull('tanggal_kembali')
                         ->whereDate('tanggal_pinjam', '<', today()->subDays(14))
                         ->count();

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
