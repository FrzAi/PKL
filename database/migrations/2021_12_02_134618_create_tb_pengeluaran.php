<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengeluaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kwitansi')->unsigned();
            $table->foreign('id_kwitansi')->references('id')->on('tb_kwitansi');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->integer('biaya');
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
        Schema::dropIfExists('tb_pengeluaran');
    }
}
