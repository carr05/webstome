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
    Schema::table('dataadmin', function (Blueprint $table) {
        $table->unsignedBigInteger('layout_id')->nullable()->after('password');
    });
}

public function down()
{
    Schema::table('dataadmin', function (Blueprint $table) {
        $table->dropColumn('layout_id');
    });
}

};
