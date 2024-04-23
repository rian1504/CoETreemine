<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halaman', function () {
    return view('layouts.pembeli');
});
Route::get('/home', function () {
    return view('home');
});


// guest

Route::get('/login', function () {
    return view('guest.login');
});
Route::get('/enter_email', function () {
    return view('guest.enter_email');
});
Route::get('/enter_password', function () {
    return view('guest.enter_password');
});
Route::get('/register', function () {
    return view('guest.register');
});


// buyer

Route::get('/home', function () {
    return view('layouts/buyer_homepage');
});
// Route::get('/home', function () {
//     return view('buyer.home');
// });
Route::get('/product_category', function () {
    return view('buyer.product_category');
});
Route::get('/portfolio', function () {
    return view('buyer.portfolio');
});
Route::get('/detail_portfolio', function () {
    return view('buyer.detail_portfolio');
});
Route::get('/custom_cart', function () {
    return view('buyer.custom_cart');
});
Route::get('/detail_custom_cart', function () {
    return view('buyer.detail_custom_cart');
});
Route::get('/upload_file', function () {
    return view('buyer.upload_file');
});
Route::get('/payment', function () {
    return view('buyer.payment');
});
Route::get('/history', function () {
    return view('buyer.history');
});
Route::get('/service', function () {
    return view('buyer.service');
});



// admin