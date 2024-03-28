<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductKategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/product', [ProductKategoriController::class, 'product']);