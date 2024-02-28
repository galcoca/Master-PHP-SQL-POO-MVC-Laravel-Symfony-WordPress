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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('role', 20)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('surname', 200)->nullable();
            $table->string('nick', 100)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
