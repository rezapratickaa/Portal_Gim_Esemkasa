<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('/detail-game', function () {
    return view('layouts.detail_game');
})->name('game.detail');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/allgame', function () {
    return view('layouts.allgame');
})->name('allgame');
