<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tahun_kerjasama');
            $table->UnsignedInteger('programstudis_id');
            $table->foreign('programstudis_id')->references('id')->on('programstudis')->onDelete('CASCADE');
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
        Schema::dropIfExists('industris');
    }
}