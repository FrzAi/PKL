<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSlip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_slip', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('keterangan');
            $table->string('nama_barang');
            $table->integer('qty');
            $table->integer('biaya');
            $table->date('tanggal');
            $table->integer('total_biaya');
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
        Schema::dropIfExists('tb_slip');
    }
}
