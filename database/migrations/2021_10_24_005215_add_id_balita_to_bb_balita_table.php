<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBalitaToBbBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bb_balita', function (Blueprint $table) {
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
        Schema::table('bb_balita', function (Blueprint $table) {
            //
        });
    }
}
