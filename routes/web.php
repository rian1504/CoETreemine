<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halaman', function () {
    return view('layouts.pembeli');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/email', function () {
    return view('email');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/password', function () {
    return view('password');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/shopping', function () {
    return view('shopping');
});
Route::get('/file', function () {
    return view('file');
});
Route::get('/cardcust', function () {
    return view('cardcust');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/history', function () {
    return view('history');
});


