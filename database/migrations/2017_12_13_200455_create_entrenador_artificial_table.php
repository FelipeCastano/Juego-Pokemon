<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadorArtificialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenadorArtificial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dificultad');
            $table->integer('idEntrenador')->unsigned();
            $table->foreign('idEntrenador')->references('id')->on('entrenador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entrenadorArtificial');
    }
}
