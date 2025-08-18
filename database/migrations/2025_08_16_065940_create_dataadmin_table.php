<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dataadmin', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->foreignId('school_id')->constrained('school')->onDelete('cascade');
            $table->timestamps();
            $table->foreignId('layout_id')->nullable()->constrained('layouts')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('dataadmin', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropColumn('school_id');
        });

        Schema::dropIfExists('dataadmin');
    }
};
