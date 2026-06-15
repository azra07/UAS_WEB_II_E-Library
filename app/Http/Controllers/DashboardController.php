<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Top Overview Stats
        $totalBooks = Book::count();
        $totalMembers = User::where('role', 'user')->count();
        $activeLoans = Borrow::whereNull('tanggal_kembali')->count();
        $lateReturns = Borrow::whereNull('tanggal_kembali')
                             ->whereDate('due_date', '<', today())
                             ->count();

// 2. Weekly Borrowing Chart (Last 7 Days)
        $weeklyData = [];
        $maxBorrows = 0;
        
        // Pull all borrows from the last 7 days into Laravel memory first
        $startDate = today()->subDays(6)->startOfDay();
        $recentBorrows = Borrow::where('tanggal_pinjam', '>=', $startDate)->get();
        
        for ($i = 6; $i >= 0; $i--) {
            // We strictly define the target date variable here
            $targetDate = today()->subDays($i);
            $targetDateString = $targetDate->format('Y-m-d');
            
            // Let Laravel filter the collection directly using precise string matching
            $count = $recentBorrows->filter(function($borrow) use ($targetDateString) {
                return $borrow->tanggal_pinjam && $borrow->tanggal_pinjam->format('Y-m-d') === $targetDateString;
            })->count();
            
            // We use that exact variable to build both strings for the chart
            $weeklyData[] = [
                'day' => $targetDate->format('D'),         // e.g., "Mon", "Tue"
                'date' => $targetDate->format('d/m'),      // e.g., "16/06"
                'count' => $count
            ];
            
            if ($count > $maxBorrows) {
                $maxBorrows = $count;
            }
        }
    
        
        // Prevent division by zero for CSS height calculations
        $maxBorrows = $maxBorrows == 0 ? 1 : $maxBorrows;
        // Prevent division by zero for CSS height calculations
        $maxBorrows = $maxBorrows == 0 ? 1 : $maxBorrows; 

        // 3. Book Categories Data
        $categories = Category::withCount('books')->has('books')->get();    
        $totalCategorizedBooks = $categories->sum('books_count') ?: 1; // Prevent division by zero

        // 4. Recent Transactions Table (Latest 4)
        $recentTransactions = Borrow::with(['user', 'details.book'])
                                    ->latest('tanggal_pinjam')
                                    ->take(4)
                                    ->get();

        return view('admin.dashboard', compact(
            'totalBooks', 
            'totalMembers', 
            'activeLoans', 
            'lateReturns', 
            'weeklyData', 
            'maxBorrows',
            'categories',
            'totalCategorizedBooks',
            'recentTransactions'
        ));
    }
}