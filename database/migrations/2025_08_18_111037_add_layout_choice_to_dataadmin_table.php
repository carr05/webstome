<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('dataadmin', function (Blueprint $table) {
            $table->tinyInteger('layout_choice')->nullable()->after('password');
        });
    }

    public function down(): void
    {
        Schema::table('dataadmin', function (Blueprint $table) {
            $table->dropColumn('layout_choice');
        });
    }
};
