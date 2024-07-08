<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/template/layout');
});

Route::get('/home', function () {
    return view('layout');
});