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
        //
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->id('user_num');
            $table->string('user_fname');
            $table->string('user_lname');
            $table->string('role_id');
            $table->string('user_field');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('profile_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
