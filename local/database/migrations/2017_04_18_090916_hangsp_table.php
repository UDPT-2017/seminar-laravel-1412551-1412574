<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HangspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hangsp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idloaisp')->unsigned();
            $table->foreign('idloaisp')->references('id')->on('loaisp');
            $table->string('tenhangsp');
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
        Schema::dropIfExists('hangsp');
    }
}
