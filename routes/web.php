<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('auth.login');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Profile routes (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Socialite: Google login
Route::get('auth/google', [SocialAuthController::class, 'redirect'])->name('social.redirect');
Route::get('auth/google/callback', [SocialAuthController::class, 'callback'])->name('social.callback');

require __DIR__.'/auth.php';

