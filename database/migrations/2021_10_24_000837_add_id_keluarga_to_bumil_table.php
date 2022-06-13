<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdKeluargaToBumilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bumil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_keluarga');
			$table->unsignedBigInteger('id_bbBumil');
			$table->unsignedBigInteger('id_llBumil');

			$table->foreign('id_keluarga')->references('id_keluarga')->on('keluarga');
            $table->foreign('id_bbBumil')->references('id_bbBumil')->on('bb_bumil');
            $table->foreign('id_llBumil')->references('id_llBumil')->on('ll_bumil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bumil', function (Blueprint $table) {
            //
        });
    }
}
