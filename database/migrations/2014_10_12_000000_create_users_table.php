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
            $table->id();
            $table->string('name');
            $table->enum('gender', ['Male', 'Female']); 
            $table->date('date_of_birth'); 
            $table->string('email')->unique();
            $table->string('phone_number'); 
            $table->string('password');
            $table->enum('role', ['admin', 'user']); 
            $table->string('token')->nullable(); 
            $table->timestamp('token_expired_at')->nullable();
            $table->timestamps(); 
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
