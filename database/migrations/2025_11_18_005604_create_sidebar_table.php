<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('name');       // Nama menu
            $table->string('icon');       // Class icon Font Awesome
            $table->string('path');       // URL/path
            $table->integer('order');     // Urutan tampilan
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sidebars');
    }
};
