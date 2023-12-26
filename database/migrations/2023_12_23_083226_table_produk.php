<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `produk` ( `id_produk` INT(50) NOT NULL AUTO_INCREMENT , `nama_produk` VARCHAR(200) NOT NULL , `harga` VARCHAR(50) NOT NULL , `kategori_id` INT(50) NOT NULL , `status_id` INT(50) NOT NULL , PRIMARY KEY (`id_produk`)) ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
