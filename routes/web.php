<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/login', function () {
    return view('login');
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
    return view('product_kategori');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/detail', function () {
    return view('detail_portofolio');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/shopping', function () {
    return view('shopping');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/cardetail', function () {
    return view('cardetail');
});


