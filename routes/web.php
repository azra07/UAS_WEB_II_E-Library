<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MemberController;

Route::get('/', function () { return view('welcome'); });

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/signup', function () { return view('signup'); })->name('register');
Route::post('/signup', [RegisteredUserController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/user/dashboard', function () { return view('User.Home'); })->name('user.dashboard');
    Route::get('/admin/catalog', [BookController::class, 'index'])->name('admin.catalog');
    Route::get('/admin/members', [MemberController::class, 'index'])->name('members.index');
    Route::get('/admin/members/create', [MemberController::class, 'create'])->name('members.create');
    Route::post('/admin/members', [MemberController::class, 'store'])->name('members.store');
    Route::resource('buku', BookController::class);
    
});
