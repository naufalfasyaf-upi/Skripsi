<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\AuthController;

// 1. GUEST ROUTES (Only accessible if the user is NOT logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
});

// 2. AUTHENTICATED ROUTES (Only accessible if the user IS logged in)
Route::middleware('auth')->group(function () {
    // If an unauthenticated user tries to access these, Laravel automatically redirects them to the login page
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
    Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

require __DIR__.'/settings.php';