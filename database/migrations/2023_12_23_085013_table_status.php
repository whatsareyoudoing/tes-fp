<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `status` ( `id_status` INT(50) NOT NULL AUTO_INCREMENT , `nama_status` VARCHAR(50) NOT NULL , PRIMARY KEY (`id_status`)) ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
