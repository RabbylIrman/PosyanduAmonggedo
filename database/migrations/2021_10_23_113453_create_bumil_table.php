<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumil', function (Blueprint $table) {
            $table->bigIncrements('id_bumil');
            $table->integer('anak_ke');
            $table->integer('usia_kandungan');
            $table->integer('tinggi_badan');
            $table->date('data_tahun');
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
        Schema::dropIfExists('bumil');
    }
}
