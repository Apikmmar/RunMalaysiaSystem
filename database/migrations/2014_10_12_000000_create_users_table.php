<?php
// BCS3453 [PROJECT]-SEMESTER 2324/1
// Student ID: CB21016
// Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD

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
            $table->foreignId('role_id');
            $table->string('user_fullname');
            $table->integer('user_ic');
            $table->string('user_address')->nullable();
            $table->integer('user_age')->nullable();
            $table->string('user_photopath')->nullable();
            $table->string('user_email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
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
