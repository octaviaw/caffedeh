<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailuser', function (Blueprint $table) {
            $table->int('id');
            $table->string('nik');
            $table->string('noktp');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->string('status_karyawan');
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });


    }

    /**nik
noktp
tempat lahir
tgl lahir
gender
status karyawan

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailuser');
    }
}
