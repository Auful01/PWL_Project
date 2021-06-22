<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lensa', function (Blueprint $table) {
            $table->id('kode');
            $table->unsignedBigInteger('merek');
            $table->string('tipe', 20);
            $table->string('deskripsi', 255);
            $table->string('gambar', 255);
            // $table->string('jumlah', 255);
            // $table->string('harga_barang', 255);
            $table->string('harga_sewa', 255);
            $table->foreign('merek')->references('id_merek')->on('merek')->onDelete('cascade');
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
        Schema::dropIfExists('lensa');
    }
}
