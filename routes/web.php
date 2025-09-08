<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Dashboard (hanya bisa diakses setelah login)
Route::get('/pengguna', [UserController::class, 'index'])
    ->middleware('auth')
    ->name('pengguna');
Route::post('/pengguna', [UserController::class, 'create'])
    ->middleware('auth')
    ->name('pengguna.create');

Route::get('/template', function () {
    return view('template');
})->middleware('auth')->name('template');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
