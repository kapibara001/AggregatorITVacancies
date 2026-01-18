<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutProjController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\Regunautorizeduser;
use App\Http\Controllers\LoginController;

Route::get('/', [MainpageController::class, 'show_vacancies_unauthorized'])->name('mainPage');

Route::get('/about', AboutProjController::class)->name('about_project');

Route::get('/login', [LoginController::class, 'openLoginWin'])->name('login_window');
Route::post('/login', [LoginController::class, 'login'])->name('login');