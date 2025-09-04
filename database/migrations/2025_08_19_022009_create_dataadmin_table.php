<?php

// database/migrations/xxxx_xx_xx_create_dataadmin_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataadminTable extends Migration
{
    public function up()
    {
        // database/migrations/2025_08_19_022009_create_dataadmin_table.php

Schema::create('dataadmin', function (Blueprint $table) {
    $table->id();
    $table->string('username');
    $table->string('password');
    $table->unsignedBigInteger('school_id')->nullable(); // tambahkan ini
    $table->foreign('school_id')->references('id')->on('school')->onDelete('set null');
    
    $table->timestamps();
});

    }

    public function down()
    {
        Schema::dropIfExists('dataadmin');
    }
}