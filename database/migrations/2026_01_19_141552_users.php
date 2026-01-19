<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table)) {
        
        };
    }

    // Создание таблицы пользователей с именем, email и паролем

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
