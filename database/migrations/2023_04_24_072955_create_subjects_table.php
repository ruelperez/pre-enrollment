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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('subject_code')->nullable();
            $table->integer('unit')->nullable();
            $table->string('day')->nullable();
            $table->string('time')->nullable();
            $table->string('room')->nullable();
            $table->string('modality')->nullable();
            $table->string('teacher')->nullable();
            $table->float('tuition')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('yearlevel_id');
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
