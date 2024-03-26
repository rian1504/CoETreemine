<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmailController;
use App\Http\Controllers\PasswordController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/email", [EmailController::class, "email"]);
Route::get("/password", [PasswordController::class, "password"]);

