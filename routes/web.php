<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('/detail-game', function () {
    return view('layouts.detail_game');
})->name('game.detail');
