<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainPage');
})->name('mainPage');

Route::get("/login", function() {
    return view('mainPage');
})->name('login');
