<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBumilToBbBumilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bb_bumil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_bumil');

			$table->foreign('id_bumil')->references('id_bumil')->on('bumil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bb_bumil', function (Blueprint $table) {
            //
        });
    }
}
