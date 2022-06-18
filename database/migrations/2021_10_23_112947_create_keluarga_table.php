<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->bigIncrements('id_keluarga');
            $table->string('no_kk');
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('alamat');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('keluarga');
    }
}
