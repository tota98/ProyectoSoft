<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('id_actividad_titulacion')->unsigned();
            $table->integer('id_academico')->unsigned();

            //Relation
          //  $table->foreign('id_actividad_titulacion')->references('id')->on('actividad_titulacions')
          //      ->onDelete('cascade')
          //      ->onUpdate('cascade');
//
          //  $table->foreign('id_academico')->references('id')->on('academicos')
          //      ->onDelete('cascade')
          //      ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_profesor');
    }
}
