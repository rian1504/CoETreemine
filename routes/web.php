<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductKategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


use App\Http\Controllers\EmailController;
use App\Http\Controllers\PasswordController;

Route::get('/', function () {
    return view('welcome');
    
});


Route::get("/email", [EmailController::class, "email"]);
Route::get("/password", [PasswordController::class, "password"]);


Route::get('/home', [HomeController::class, 'home']);
Route::get('/product', [ProductKategoriController::class, 'product']);