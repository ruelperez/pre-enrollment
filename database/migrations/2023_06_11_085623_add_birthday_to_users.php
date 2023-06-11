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
        Schema::table('users', function (Blueprint $table) {
            $table->string('birthday')->nullable()->after('last_school');
            $table->string('age')->nullable()->after('last_school');
            $table->string('address')->nullable()->after('last_school');
            $table->string('status')->nullable()->after('last_school');
            $table->string('sex')->nullable()->after('last_school');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
