<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutProjController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\Regunautorizeduser;

Route::get('/', [MainpageController::class, 'show_vacancies_unauthorized'])->name('mainPage');
Route::get('/about', AboutProjController::class)->name('about_project');