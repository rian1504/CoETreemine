<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\DetailController;
// use App\Http\Controllers\HistoryController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PortofolioController;
// use App\Http\Controllers\ProductKategoriController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\EmailController;
// use App\Http\Controllers\PasswordController;
// use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\ShoppingController;
// use App\Http\Controllers\UploadController;
// use App\Http\Controllers\CardetailController;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', [LoginController::class, 'login']);
// Route::get('/register', [RegisterController::class, 'register']);
// Route::get('/email', [EmailController::class, 'email']);
// Route::get('/password', [PasswordController::class, 'password']);
// Route::get('/home', [HomeController::class, 'home']);
// Route::get('/product', [ProductKategoriController::class, 'product']);
// Route::get('/service', [ServiceController::class, 'service']);
// Route::get('/portofolio', [PortofolioController::class, 'portofolio']);
// Route::get('/detail', [DetailController::class, 'detail']);
// Route::get('/payment', [PaymentController::class, 'payment']);
// Route::get('/shopping', [ShoppingController::class, 'shopping']);
// Route::get('/file', [UploadController::class, 'file']);
// Route::get('/cardcust', [CardetailController::class, 'cardcust']);
// Route::get('/upload', [UploadController::class, 'upload']);
// Route::get('/history', [HistoryController::class, 'history']);

Route::get('/home', function () {
    return view('layouts.pembeli');
});
Route::get('/halaman', function () {
    return view('layouts.pembeli');
});
