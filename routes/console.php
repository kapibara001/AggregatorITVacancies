<?php
// Файл для определения команд консоли
// Например:
/**
 * Artisan::command('users:count', function () {
 *   $this->info('Users: ' . \App\Models\User::count());
 * })->describe('Show users count');
 * 
 * Применение в консоли:
 * php artisan users:count
 * 
 */

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
