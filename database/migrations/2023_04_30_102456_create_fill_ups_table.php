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
        Schema::create('fill_ups', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('user_id');
            $table->unsignedSmallInteger('course_id');
            $table->unsignedSmallInteger('yearlevel_id');
            $table->unsignedSmallInteger('semester_id');
            $table->bigInteger('student_number')->nullable();
            $table->string('student_class')->nullable();
            $table->integer('school_year_start');
            $table->integer('school_year_end');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('address');
            $table->string('guardian');
            $table->string('contact_number');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->string('sex')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fill_ups');
    }
};
