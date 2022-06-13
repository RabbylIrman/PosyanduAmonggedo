<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBalitaToTbBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_balita', function (Blueprint $table) {
            $table->unsignedBigInteger('id_balita');

			$table->foreign('id_balita')->references('id_balita')->on('balita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_balita', function (Blueprint $table) {
            //
        });
    }
}
