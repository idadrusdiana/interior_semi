<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransasksiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transasksi_details', function (Blueprint $table) {
            $table->increments('id')->length(10);
            $table->integer('transaksi_id')->length(10)->unsigned();
            $table->integer('barang_id')->length(10)->unsigned();
            $table->integer('qty')->length(10);
            $table->integer('harga')->length(10);
            $table->integer('total')->length(10);
            $table->timestamps();
            $table->foreign('transaksi_id')->references('id')->on('transaksis');
            $table->foreign('barang_id')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transasksi_details');
    }
}
