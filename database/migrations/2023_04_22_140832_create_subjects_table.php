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
            $table->string('name');
            $table->string('subject_code');
            $table->string('unit');
            $table->string('day');
            $table->string('time');
            $table->string('room');
            $table->string('modality');
            $table->string('teacher');
            $table->string('tuition');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('yearlevel_id');
            $table->unsignedBigInteger('semister_id');
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
