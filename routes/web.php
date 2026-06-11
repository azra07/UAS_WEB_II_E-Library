<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route login & signup kustom Anda
// Route::get('/signin', function () { 
//     return view('login'); 
// })->name('login'); 

// Route::get('/signup', function () { return view('signup'); });

Route::get('/login', function () { 
    return view('login'); 
})->name('login'); 

// --- GROUP DASHBOARD (Sudah Login) ---
Route::middleware(['auth', 'verified'])->group(function () {

    // 1. Group Admin (Pustakawan)
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
        Route::resource('buku', BookController::class); // Admin bisa kelola buku
    });

    // 2. Group User (Anggota)
    Route::get('/user/dashboard', function () { return view('User.Home'); })->name('user.dashboard');

    // Profile (Bisa diakses keduanya)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';