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
        Schema::table('tampilan', function (Blueprint $table) {
            //
            Schema::table('tampilan', function (Blueprint $table) {
            $table->string('nama_sekolah')->nullable()->after('font_color');
            $table->string('menu1')->nullable()->after('nama_sekolah');
            $table->string('menu2')->nullable()->after('menu1');
            $table->string('menu3')->nullable()->after('menu2');
            $table->string('menu4')->nullable()->after('menu3');
            $table->string('menu5')->nullable()->after('menu4');
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tampilan', function (Blueprint $table) {
            //
        });
    }
};
