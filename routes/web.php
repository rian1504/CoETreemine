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
Route::get('/buyer_cart', function () {
    return view('buyer.buyer_cart');
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
Route::get('/admin/category_portfolio/create', function () {
    return view('admin/category_portfolio.create');
});
Route::get('/admin/category_portfolio/edit', function () {
    return view('admin/category_portfolio.edit');
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
Route::get('/admin/assembly', function () {
    return view('admin/assembly.index');
});
Route::get('/admin/assembly/board/create', function () {
    return view('admin/assembly/board.create');
});
Route::get('/admin/assembly/board/edit', function () {
    return view('admin/assembly/board.edit');
});
Route::get('/admin/assembly/flexible/create', function () {
    return view('admin/assembly/flexible.create');
});
Route::get('/admin/assembly/flexible/edit', function () {
    return view('admin/assembly/flexible.edit');
});
Route::get('/admin/assembly/side/create', function () {
    return view('admin/assembly/side.create');
});
Route::get('/admin/assembly/side/edit', function () {
    return view('admin/assembly/side.edit');
});

Route::get('/admin/review_payment', function () {
    return view('admin/review_payment/index');
});
Route::get('/admin/review_payment/create', function () {
    return view('admin/review_payment/create');
});

Route::get('/admin/review_file', function () {
    return view('admin/review_file/index');
});
Route::get('/admin/review_file/assembly', function () {
    return view('admin/review_file/assembly');
});
Route::get('/admin/review_file/prototype', function () {
    return view('admin/review_file/prototype');
});

Route::get('/admin/history', function () {
    return view('admin/history');
});
Route::get('/admin/prototype', function () {
    return view('admin/prototype.index');
});
Route::get('/admin/prototype/board/create', function () {
    return view('admin/prototype/board.create');
});
Route::get('/admin/prototype/board/edit', function () {
    return view('admin/prototype/board.edit');
});
Route::get('/admin/prototype/track/create', function () {
    return view('admin/prototype/track.create');
});
Route::get('/admin/prototype/track/edit', function () {
    return view('admin/prototype/track.edit');
});
Route::get('/admin/prototype/thickness/create', function () {
    return view('admin/prototype/thickness.create');
});
Route::get('/admin/prototype/thickness/edit', function () {
    return view('admin/prototype/thickness.edit');
});
Route::get('/admin/prototype/layer/create', function () {
    return view('admin/prototype/layer.create');
});
Route::get('/admin/prototype/layer/edit', function () {
    return view('admin/prototype/layer.edit');
});
Route::get('/admin/prototype/material/create', function () {
    return view('admin/prototype/material.create');
});
Route::get('/admin/prototype/material/edit', function () {
    return view('admin/prototype/material.edit');
});
Route::get('/admin/prototype/fr4/create', function () {
    return view('admin/prototype/fr4.create');
});
Route::get('/admin/prototype/fr4/edit', function () {
    return view('admin/prototype/fr4.edit');
});
Route::get('/admin/prototype/finished_cooper/create', function () {
    return view('admin/prototype/finished_cooper.create');
});
Route::get('/admin/prototype/finished_cooper/edit', function () {
    return view('admin/prototype/finished_cooper.edit');
});
Route::get('/admin/prototype/inner_cooper/create', function () {
    return view('admin/prototype/inner_cooper.create');
});
Route::get('/admin/prototype/inner_cooper/edit', function () {
    return view('admin/prototype/inner_cooper.edit');
});
Route::get('/admin/prototype/route_process/create', function () {
    return view('admin/prototype/route_process.create');
});
Route::get('/admin/prototype/route_process/edit', function () {
    return view('admin/prototype/route_process.edit');
});
Route::get('/admin/prototype/cooper_layer/create', function () {
    return view('admin/prototype/cooper_layer.create');
});
Route::get('/admin/prototype/cooper_layer/edit', function () {
    return view('admin/prototype/cooper_layer.edit');
});
Route::get('/admin/prototype/hole/create', function () {
    return view('admin/prototype/hole.create');
});
Route::get('/admin/prototype/hole/edit', function () {
    return view('admin/prototype/hole.edit');
});
Route::get('/admin/prototype/solder/create', function () {
    return view('admin/prototype/solder.create');
});
Route::get('/admin/prototype/solder/edit', function () {
    return view('admin/prototype/solder.edit');
});
Route::get('/admin/prototype/silkscreen_layer1/create', function () {
    return view('admin/prototype/silkscreen_layer1.create');
});
Route::get('/admin/prototype/silkscreen_layer1/edit', function () {
    return view('admin/prototype/silkscreen_layer1.edit');
});
Route::get('/admin/prototype/surface/create', function () {
    return view('admin/prototype/surface.create');
});
Route::get('/admin/prototype/surface/edit', function () {
    return view('admin/prototype/surface.edit');
});
Route::get('/admin/prototype/via_process/create', function () {
    return view('admin/prototype/via_process.create');
});
Route::get('/admin/prototype/via_process/edit', function () {
    return view('admin/prototype/via_process.edit');
});