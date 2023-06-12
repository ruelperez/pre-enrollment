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
        Schema::create('newstudents', function (Blueprint $table) {
            $table->id();
            $table->string('birthday');
            $table->string('age');
            $table->string('address');
            $table->string('status');
            $table->string('sex');
            $table->string('middle_name')->nullable();
            $table->bigInteger('usn')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('last_school')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newstudents');
    }
};
