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
        Schema::create('hero', function (Blueprint $table) {
            $table->id();
            $table->enum('font_size', ['s', 'm', 'l'])->default('m'); // ukuran font
            $table->string('font_color')->default('#000000');         // warna font
            $table->string('font')->default('Poppins');               // jenis font
            $table->string('image')->nullable();                      // gambar hero
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero');
    }
};
