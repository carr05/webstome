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
        Schema::create('semua', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('warna_utama')->nullable();
            $table->string('warna_kedua')->nullable();
            $table->string('font_color')->nullable();
            $table->string('font_utama')->nullable();
            $table->string('font_heading')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semua');
    }
};
