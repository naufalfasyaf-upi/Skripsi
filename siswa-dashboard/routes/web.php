<?php

// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;

// Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', [DashboardController::class, 'index']);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');


require __DIR__.'/settings.php';
