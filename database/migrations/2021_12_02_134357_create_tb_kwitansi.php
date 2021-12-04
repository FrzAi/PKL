<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKwitansi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kwitansi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_slip')->unsigned();
            $table->foreign('id_slip')->references('id')->on('tb_slip');
            $table->string('nama');
            $table->string('pekerjaan')->nullable();
            $table->string('alamat');
            $table->string('keterangan');
            $table->integer('biaya');
            $table->date('tanggal');
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
        Schema::dropIfExists('tb_kwitansi');
    }
}
