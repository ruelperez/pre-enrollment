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
        Schema::create('studentinfos', function (Blueprint $table) {
            $table->id();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            $table->string('sex')->nullable();
            $table->string('middle_name')->nullable();
            $table->bigInteger('usn')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentinfos');
    }
};
