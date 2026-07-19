<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Automatically redirect the root URL to the dashboard
Route::redirect('/', '/dashboard');

// 1. GUEST ROUTES (Only accessible if the user is NOT logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
});

// 2. AUTHENTICATED ROUTES (Only accessible if the user IS logged in)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
    Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// 3. ADMIN ROUTES (Only accessible if the user is an admin)
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/settings.php';