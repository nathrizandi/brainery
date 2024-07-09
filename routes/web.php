<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/template/layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/bootcamp', function () {
    return view('bootcamp.bootcamp');
});

Route::prefix('bootcamp')->group(function(){
    Route::get('/menu', function () {
        return view('bootcamp.menu');
    });
    Route::get('/list', function () {
        return view('bootcamp.list');
    });
    Route::get('/detail', function () {
        return view('bootcamp.detail');
    });
});

Route::get('/checkout', function () {
    return view('checkout.checkout');
});
Route::get('/checkout-success', function () {
    return view('checkout.success');
});

Route::get('/search-result', function () {
    return view('search-result');
});