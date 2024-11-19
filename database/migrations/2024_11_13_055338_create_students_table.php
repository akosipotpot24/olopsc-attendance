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
            $table->string('fullname');
            
            $table->string('stud_number');
            $table->string('email');
            $table->string('grade_level');

            // $table->string('branch_code');
            // $table->string('category_code');
            
            $table->timestamp('email_verified_at')->nullable();      
            $table->rememberToken();
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
