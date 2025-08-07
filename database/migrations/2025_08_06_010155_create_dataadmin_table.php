<?php

// database/migrations/xxxx_xx_xx_create_dataadmin_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataadminTable extends Migration
{
    public function up()
    {
        Schema::create('dataadmin', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dataadmin');
    }
}
