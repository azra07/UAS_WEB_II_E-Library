<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;

// Halaman Welcome
Route::get('/', function () { return view('welcome'); });

// Rute Login & Signup Manual
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/signup', function () { return view('signup'); })->name('register');
Route::post('/signup', [RegisteredUserController::class, 'store']);


// ==========================================
// ROUTE DIBAWAH INI MEMERLUKAN LOGIN (AUTH)
// ==========================================
Route::middleware(['auth'])->group(function () {

    // 1. ROUTE KHUSUS USER BIASA
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

     // TAMBAHKAN RUTE PROFIL INI:
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user/dashboard', [BookController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/user/buku/{id}', [BookController::class, 'userShow'])->name('buku.user.show');

    // Rute untuk memproses pengiriman ulasan buku
    Route::post('/user/buku/{id}/review', [BookController::class, 'storeReview'])->name('buku.review.store');
    Route::post('/user/buku/{id}/borrow', [BookController::class, 'borrowBook'])->name('buku.borrow');
Route::post('/user/buku/{id}/reading-list', [BookController::class, 'toggleReadingList'])->name('buku.reading_list');

    // 2. ROUTE KHUSUS ADMIN (Dilindungi Middleware Admin)
    // Catatan: Pastikan Anda sudah mendaftarkan middleware 'admin' di bootstrap/app.php
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
        Route::get('/admin/catalog', [BookController::class, 'index'])->name('admin.catalog');
        
        // Manajemen Anggota (Members)
        Route::get('/admin/members', [MemberController::class, 'index'])->name('members.index');
        Route::get('/admin/members/create', [MemberController::class, 'create'])->name('members.create');
        Route::post('/admin/members', [MemberController::class, 'store'])->name('members.store');
        
        // Manajemen Transaksi
        Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('transactions.index');
        Route::get('/admin/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
        Route::post('/admin/transactions', [TransactionController::class, 'store'])->name('transactions.store');
        Route::patch('/admin/transactions/{borrow}/return', [TransactionController::class, 'returnBook'])->name('transactions.return');
        
        // Resource Buku untuk Admin (CRUD Buku)
        Route::resource('buku', BookController::class);
    });

});
