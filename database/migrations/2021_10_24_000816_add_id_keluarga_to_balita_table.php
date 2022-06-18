<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdKeluargaToBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balita', function (Blueprint $table) {
            $table->unsignedBigInteger('id_keluarga');
			$table->unsignedBigInteger('id_bbBalita');
			$table->unsignedBigInteger('id_tbBalita');

			$table->foreign('id_keluarga')->references('id_keluarga')->on('keluarga');
            $table->foreign('id_bbBalita')->references('id_bbBalita')->on('bb_balita');
            $table->foreign('id_tbBalita')->references('id_tbBalita')->on('tb_balita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balita', function (Blueprint $table) {
            //
        });
    }
}
