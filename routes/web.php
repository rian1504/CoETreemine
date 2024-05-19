<?php

use App\Http\Controllers\Admin\AssemblyBoardTypeController;
use App\Http\Controllers\Admin\AssemblyFlexibleController;
use App\Http\Controllers\Admin\AssemblySideController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomAssemblyController;
use App\Http\Controllers\Admin\CustomPrototypeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);

    // Assembly
    Route::get('assembly', [CustomAssemblyController::class, 'index'])->name('assembly.index');
    Route::prefix('assembly')->group(function () {
        Route::resource('flexible', AssemblyFlexibleController::class);
        Route::resource('board', AssemblyBoardTypeController::class);
        Route::resource('side', AssemblySideController::class);
    });

    Route::resource('prototype', CustomPrototypeController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Kelola Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
