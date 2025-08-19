<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveLayoutIdFromDataadminTable extends Migration
{
    public function up()
    {
        Schema::table('dataadmin', function (Blueprint $table) {
            if (Schema::hasColumn('dataadmin', 'layout_id')) {
                // Hapus foreign key kalau ada
                try {
                    $table->dropForeign(['layout_id']);
                } catch (\Exception $e) {
                    // Abaikan kalau tidak ada foreign key
                }

                // Hapus kolom layout_id
                $table->dropColumn('layout_id');
            }
        });
    }

    public function down()
    {
        Schema::table('dataadmin', function (Blueprint $table) {
            if (!Schema::hasColumn('dataadmin', 'layout_id')) {
                $table->unsignedBigInteger('layout_id')->nullable()->after('password');
            }
        });
    }
}
