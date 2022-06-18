<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_balita', function (Blueprint $table) {
            $table->bigIncrements('id_tbBalita');
            $table->integer('januari')->nullable();
            $table->integer('februari')->nullable();
            $table->integer('maret')->nullable();
            $table->integer('april')->nullable();
            $table->integer('mei')->nullable();
            $table->integer('juni')->nullable();
            $table->integer('juli')->nullable();
            $table->integer('agustus')->nullable();
            $table->integer('september')->nullable();
            $table->integer('oktober')->nullable();
            $table->integer('november')->nullable();
            $table->integer('desember')->nullable();
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
        Schema::dropIfExists('tb_balita');
    }
}
