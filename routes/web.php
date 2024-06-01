<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/halaman', function () {
    return view('layouts.pembeli');
});
Route::get('/home', function () {
    return view('home');
});


// guest
Route::get('/guest', function () {
    return view('guest.home');
});
Route::get('/guest_product_category', function () {
    return view('guest.product_category');
});
Route::get('/guest_portfolio', function () {
    return view('guest.portfolio');
});
Route::get('/guest_detail_portfolio', function () {
    return view('guest.detail_portfolio');
});
Route::get('/guest_service', function () {
    return view('guest.service');
});
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
Route::get('/forgot', function () {
    return view('guest.forgot_password');
});
Route::get('/verify', function () {
    return view('guest.verify_email');
});



// buyer

Route::get('/buyer', function () {
    return view('buyer.home');
});
Route::get('/buyer_product_category', function () {
    return view('buyer.product_category');
});
Route::get('/buyer_portfolio', function () {
    return view('buyer.portfolio');
});
Route::get('/buyer_detail_portfolio', function () {
    return view('buyer.detail_portfolio');
});
Route::get('/buyer_service', function () {
    return view('buyer.service');
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
Route::get('/manage_profile', function () {
    return view('buyer.manage_profile');
});




// admin
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/category_portfolio', function () {
    return view('admin/category_portfolio.index');
});
Route::get('/admin/portfolio', function () {
    return view('admin/portfolio.index');
});
Route::get('/admin/portfolio/create', function () {
    return view('admin/portfolio.create');
});
Route::get('/admin/portfolio/edit', function () {
    return view('admin/portfolio.edit');
});
Route::get('/assembly', function () {
    return view('admin/assembly.index');
});
Route::get('/assembly/board/create', function () {
    return view('admin/assembly/board.create');
});
Route::get('/assembly/board/edit', function () {
    return view('admin/assembly/board.edit');
});
Route::get('/assembly/flexible/create', function () {
    return view('admin/assembly/flexible.create');
});
Route::get('/assembly/flexible/edit', function () {
    return view('admin/assembly/flexible.edit');
});
Route::get('/assembly/side/create', function () {
    return view('admin/assembly/side.create');
});
Route::get('/assembly/side/edit', function () {
    return view('admin/assembly/side.edit');
});
Route::get('/admin/test', function () {
    return view('admin/test');
});
