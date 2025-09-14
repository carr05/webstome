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
       Schema::create('tampilan', function (Blueprint $table) {
    $table->id();
    $table->string('layout')->nullable();
    $table->enum('font_size', ['s', 'm', 'l'])->default('m');
    $table->string('warna')->nullable();
    $table->string('font')->nullable();
    $table->string('logo')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tampilan');
    }
};
