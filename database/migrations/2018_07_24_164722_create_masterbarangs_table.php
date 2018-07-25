<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang');
            $table->string('nama');
            $table->integer('harga_jual');
            $table->integer('harga_beli');
            $table->string('satuan');
            $table->integer('min_stok');
            $table->string('brand');
            $table->integer('kapasitas');
            $table->integer('diskon');
            $table->timestamps('deleted_at');
            $table->timestamps();
        });
    }

    /**master_barang
kode_barang
nama
harga beli
harga jual
satuan
min stok
brand
kapasitas
diskon
deleted_at

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterbarangs');
    }
}
