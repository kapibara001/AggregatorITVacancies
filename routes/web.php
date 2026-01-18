<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutProjController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\Regunautorizeduser;
use App\Http\Controllers\AuthController;

// Главная страница
Route::get('/', [MainpageController::class, 'show_vacancies_unauthorized'])->name('mainPage');

// Окно "О проекте"
Route::get('/about', AboutProjController::class)->name('about_project');

// Открытие окна входа
Route::get('/login', [AuthController::class, 'openLoginWin'])->name('login_window');
// Процесс входа 
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Открытие окна регистрации
Route::get('/register', [AuthController::class, 'openRegWindow'])->name('register_window'); 
// Процесс регистрации
Route::post('/register', [AuthController::class, 'registration'])->name('registration'); 