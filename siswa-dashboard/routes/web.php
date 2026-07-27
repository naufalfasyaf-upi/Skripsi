<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;

// 1. GUEST ROUTES (Unified Login)
Route::middleware('guest')->group(function () {
    Route::get('/', function() {
        return redirect()->route('login'); // Redirect root to login page
    });
    
    Route::get('/login', function () {
        return view('login'); // Loads your existing single login view
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
});

// Unified Logout (Requires ANY auth state)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// 2. SISWA ROUTES (web guard)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
    Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis');
});


// 3. GURU ROUTES (teacher guard)
Route::prefix('guru')->name('guru.')->middleware('auth:teacher')->group(function () {
    Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('dashboard');
});


// 4. ADMIN ROUTES (admin guard)
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('siswa', StudentController::class)->names('admin.siswa');
    Route::resource('guru', TeacherController::class)->names('admin.guru');
    Route::resource('kelas', KelasController::class)->names('admin.kelas');
    Route::resource('mapel', MapelController::class)->names('admin.mapel');
});

require __DIR__.'/settings.php';