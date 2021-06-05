<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('kode_pinjam');
            // $table->string('nama');
            $table->unsignedBigInteger('id_kamera');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_kamera')->references('kode')->on('kamera');
            $table->foreign('id_user')->references('id')->on('users');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
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
        //
    }
}
