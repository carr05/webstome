<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
<<<<<<< HEAD
    Schema::create('berita', function (Blueprint $table) {
=======
    Schema::create('beritas', function (Blueprint $table) {
>>>>>>> 435a7c3 (landing web promosi)
        $table->id();
        $table->string('judul');
        $table->text('konten');
        $table->string('gambar')->nullable();
        $table->date('tanggal');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
