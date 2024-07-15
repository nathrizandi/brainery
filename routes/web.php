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

Route::prefix('profile')->group(function(){
    Route::get('/manage', function () {
        return view('profile.manage');
    });
    Route::get('/edit', function () {
        return view('profile.edit');
    });
    Route::get('/certificate', function () {
        return view('profile.certificate');
    });
});

Route::prefix('course')->group(function(){
    Route::get('/subs', function () {
        return view('course.subscription');
    });
    Route::get('/menu', function () {
        return view('course.menu');
    });
    Route::get('/view', function () {
        return view('course.view');
    });
    Route::get('/detail', function () {
        return view('course.detail');
    });
});

Route::get('/mylearning', function () {
    return view('mylearning');
});