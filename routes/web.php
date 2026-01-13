<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/allgame', function () {
    return view('layouts.allgame');
});
