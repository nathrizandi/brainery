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

Route::get('/bootcamp', function () {
    return view('bootcamp/bootcamp');
});

Route::prefix('bootcamp')->group(function(){
    Route::get('/menu', function () {
        return view('bootcamp/menu');
    });
});