<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Resource User (pengguna) → otomatis index, create, store, show, edit, update, destroy
Route::resource('pengguna', UserController::class)->middleware('auth');

// Template
Route::get('/template', function () {
    return view('template');
})->middleware('auth')->name('template');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
