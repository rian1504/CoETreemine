<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProductKategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UploadController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/email', [EmailController::class, 'email']);
Route::get('/password', [PasswordController::class, 'password']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/product', [ProductKategoriController::class, 'product']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/portofolio', [PortofolioController::class, 'portofolio']);
Route::get('/detail', [DetailController::class, 'detail']);
Route::get('/payment', [PaymentController::class, 'payment']);
Route::get('/shopping', [ShoppingController::class, 'shopping']);
Route::get('/upload', [UploadController::class, 'upload']);

