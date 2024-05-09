<?php

use App\Http\Controllers\Admin\AssemblyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PrototypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function () {
    Route::resource('assembly', AssemblyController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('prototype', PrototypeController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Kelola Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';