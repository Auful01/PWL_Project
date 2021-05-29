<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableKamera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamera', function (Blueprint $table) {
            $table->id('kode');
            $table->string('merek', 20);
            $table->string('tipe', 20);
            $table->string('gambar', 255);
            // $table->string('jumlah', 255);
            // $table->string('harga_barang', 255);
            $table->string('harga_sewa', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamera');
    }
}
