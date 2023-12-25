<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `kategori` ( `id_kategori` INT(50) NOT NULL AUTO_INCREMENT , `nama_kategori` VARCHAR(50) NOT NULL , PRIMARY KEY (`id_kategori`)) ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
