<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('notelp');
            $table->string('alamat');
            $table->string('nama_pic');
            $table->string('notelp_pic');
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**id
nama
notelp
alamat
nama pic
notelp pic
deleted_at

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
