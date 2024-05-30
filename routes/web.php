<?php

use App\Http\Controllers\Admin\AssemblyBoardTypeController;
use App\Http\Controllers\Admin\AssemblyFlexibleController;
use App\Http\Controllers\Admin\AssemblySideController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomAssemblyController;
use App\Http\Controllers\Admin\CustomPrototypeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PrototypeBoardTypeController;
use App\Http\Controllers\Admin\PrototypeCooperLayerController;
use App\Http\Controllers\Admin\PrototypeFinishedCooperController;
use App\Http\Controllers\Admin\PrototypeFr4Controller;
use App\Http\Controllers\Admin\PrototypeHoleController;
use App\Http\Controllers\Admin\PrototypeInnerCooperController;
use App\Http\Controllers\Admin\PrototypeLayerController;
use App\Http\Controllers\Admin\PrototypeMaterialController;
use App\Http\Controllers\Admin\PrototypeRouteProcessController;
use App\Http\Controllers\Admin\PrototypeSilkController;
use App\Http\Controllers\Admin\PrototypeSilkscreenLayer1Controller;
use App\Http\Controllers\Admin\PrototypeSolderController;
use App\Http\Controllers\Admin\PrototypeSoldermaskLayer1Controller;
use App\Http\Controllers\Admin\PrototypeSurfaceController;
use App\Http\Controllers\Admin\PrototypeThicknessController;
use App\Http\Controllers\Admin\PrototypeTrackController;
use App\Http\Controllers\Admin\PrototypeViaProcessController;
use App\Http\Controllers\Admin\ReviewFileController;
use App\Http\Controllers\Admin\ReviewPaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// admin
Route::middleware(['admin', 'auth'])->prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);

    // Review File
    Route::prefix('review_file')->group(function () {
        Route::get('', [ReviewFileController::class, 'index'])->name('review_file.index');
        Route::get('custom_assembly/{assembly}', [ReviewFileController::class, 'showAssembly'])->name('review_file.showAssembly');
        Route::get('custom_prototype/{prototype}', [ReviewFileController::class, 'showPrototype'])->name('review_file.showPrototype');
        Route::post('reject/{cart_custom}', [ReviewFileController::class, 'reject'])->name('review_file.reject');
        Route::post('accept/{cart_custom}', [ReviewFileController::class, 'accept'])->name('review_file.accept');
    });

    // Review Payment
    Route::prefix('review_payment')->group(function () {
        Route::get('', [ReviewPaymentController::class, 'index'])->name('review_payment.index');
        Route::get('/{order}', [ReviewPaymentController::class, 'show'])->name('review_payment.show');
        Route::post('reject/{order}', [ReviewPaymentController::class, 'reject'])->name('review_payment.reject');
        Route::post('accept/{order}', [ReviewPaymentController::class, 'accept'])->name('review_payment.accept');
    });

    // Assembly
    Route::prefix('assembly')->group(function () {
        Route::get('', [CustomAssemblyController::class, 'index'])->name('assembly.index');
        Route::resource('flexible', AssemblyFlexibleController::class);
        Route::resource('board', AssemblyBoardTypeController::class);
        Route::resource('side', AssemblySideController::class);
    });

    // Prototype
    Route::prefix('prototype')->group(function () {
        Route::get('', [CustomPrototypeController::class, 'index'])->name('prototype.index');
        Route::resource('board_type', PrototypeBoardTypeController::class);
        Route::resource('route_process', PrototypeRouteProcessController::class);
        Route::resource('fr4', PrototypeFr4Controller::class);
        Route::resource('thickness', PrototypeThicknessController::class);
        Route::resource('layer', PrototypeLayerController::class);
        Route::resource('inner_cooper', PrototypeInnerCooperController::class);
        Route::resource('finished_cooper', PrototypeFinishedCooperController::class);
        Route::resource('cooper_layer', PrototypeCooperLayerController::class);
        Route::resource('track', PrototypeTrackController::class);
        Route::resource('hole', PrototypeHoleController::class);
        Route::resource('solder', PrototypeSolderController::class);
        Route::resource('silk', PrototypeSilkController::class);
        Route::resource('surface', PrototypeSurfaceController::class);
        Route::resource('via_process', PrototypeViaProcessController::class);
        Route::resource('material', PrototypeMaterialController::class);
        Route::resource('soldermask_layer1', PrototypeSoldermaskLayer1Controller::class);
        Route::resource('silkscreen_layer1', PrototypeSilkscreenLayer1Controller::class);
    });
});

// buyer
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Kelola Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';