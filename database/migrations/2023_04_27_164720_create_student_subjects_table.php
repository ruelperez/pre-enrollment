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
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('user_id');
            $table->unsignedSmallInteger('subject_id');
            $table->unsignedSmallInteger('course_id');
            $table->unsignedSmallInteger('yearlevel_id');
            $table->unsignedSmallInteger('semester_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_subjects');
    }
};
