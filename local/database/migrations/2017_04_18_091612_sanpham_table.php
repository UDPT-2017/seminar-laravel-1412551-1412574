<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idhangsp')->unsigned();
            $table->foreign('idhangsp')->references('id')->on('hangsp');
            $table->string('tensp');
            $table->integer('gia')->default(0);
            $table->integer('giamgia')->default(0);
            $table->string('urlhinh');
            $table->integer('tinhtrang');
            $table->longtext('khuyenmai');
            $table->longText('tomtat');
            $table->longText('chitiet');
            $table->integer('luotxem')->default(0);
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
        Schema::dropIfExists('sanpham');
    }
}
