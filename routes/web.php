<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Halaman Welcome
Route::get('/', function () { return view('welcome'); });

// Rute Login Manual (Tanpa middleware auth yang bikin ribet)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/signup', function () { return view('signup'); })->name('register');
Route::post('/signup', [RegisteredUserController::class, 'store']);

// Route Dashboard (Dengan pengecekan login)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/user/dashboard', function () { return view('User.Home'); })->name('user.dashboard');
    Route::resource('buku', BookController::class);
});