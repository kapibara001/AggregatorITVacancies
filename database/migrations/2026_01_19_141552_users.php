<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use illuminate\Support\Facades\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('registration_time');
        });
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
