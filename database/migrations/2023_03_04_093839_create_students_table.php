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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('phone_number');
            $table->string('dob');
            $table->string('email');
            $table->string('father_name');
            $table->string('father_number');
            $table->string('course');
            $table->string('joining_date');
            $table->string('qualification');
            $table->string('aadhar_number');
            $table->string('aadhar_img');
            $table->string('aadhar_back_img');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('terms_conditions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};