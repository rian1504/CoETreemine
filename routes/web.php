<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductKategoriController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmailController;
use App\Http\Controllers\PasswordController;

use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/email", [EmailController::class, "email"]);
Route::get("/password", [PasswordController::class, "password"]);


Route::get('/home', [HomeController::class, 'home']);
Route::get('/product', [ProductKategoriController::class, 'product']);






Route::get('/service', [ServiceController::class, 'service']);
