<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// === ГЛАВНАЯ СТРАНИЦА (SAINT PASTA) ===
Route::get('/', function () {
    return view('home');
});

// === DASHBOARD (Требуется авторизация) ===
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// === ПРОФИЛЬ ПОЛЬЗОВАТЕЛЯ (Требуется авторизация) ===
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// === МАРШРУТЫ АВТОРИЗАЦИИ ===
require __DIR__.'/auth.php';