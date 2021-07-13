<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{

    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id')->length(10);
            $table->integer('user_id')->length(10)->unsigned();
            $table->integer('barang_id')->length(10)->unsigned();
            $table->integer('total')->length(10);
            $table->date('tanggal');
            $table->string('picture')->length(100);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('barang_id')->references('id')->on('barangs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
