<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
        (1, 'L QUEENLY'),
        (3, 'L MTH AKSESORIS (IM)'),
        (4, 'L MTH TABUNG (LK)'),
        (5, 'SP MTH SPAREPART (LK)'),
        (6, 'CI MTH TINTA LAIN (IM)'),
        (7, 'S MTH STEMPEL (IM)'),
        (8, 'L MTH AKSESORIS (LK)');");

        DB::statement("INSERT INTO `status` (`id_status`, `nama_status`) VALUES
        (1, 'bisa dijual'),
        (2, 'tidak bisa dijual');");

        DB::statement("INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `kategori_id`, `status_id`) VALUES
        (1, 'tester', '4000', 3, 2),
        (2, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', '12500', 1, 1),
        (3, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', '1000', 3, 1),
        (4, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', '1000', 3, 1),
        (5, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', '12500', 3, 2),
        (6, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', '12500', 3, 1),
        (7, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', '1000', 3, 1),
        (8, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', '13000', 3, 2),
        (9, 'ALUMUNIUM FOIL PET SHEET 250mm IM', '1000', 3, 2),
        (10, 'ARM PENDEK MODEL U', '13000', 3, 1),
        (11, 'ARM SUPPORT KECIL', '13000', 4, 2),
        (12, 'ARM SUPPORT KOTAK PUTIH', '13000', 3, 2),
        (13, 'ARM SUPPORT PENDEK POLOS', '13000', 4, 1),
        (14, 'ARM SUPPORT S IM', '1000', 3, 2),
        (15, 'ARM SUPPORT T (IMPORT)', '13000', 3, 1),
        (16, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', '10000', 4, 1),
        (17, 'BLACK LASER TONER FP-T3 (100gr)', '13000', 3, 2),
        (18, 'BODY PRINTER CANON IP2770', '500', 5, 1),
        (19, 'BODY PRINTER T13X', '15000', 5, 1),
        (20, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', '10000', 6, 1),
        (21, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', '10000', 6, 2),
        (22, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', '1500', 6, 1),
        (23, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', '1500', 6, 2),
        (24, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', '1500', 6, 2),
        (25, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', '1000', 6, 1),
        (26, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', '1500', 6, 2),
        (27, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', '1500', 6, 1),
        (28, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', '1000', 6, 2),
        (29, 'BOTOL KOTAK 100ML LK', '1000', 8, 1),
        (30, 'BOTOL 10ML IM', '1000', 7, 2);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
