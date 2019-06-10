<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoCorrectoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_correctora', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_actividad_titulacion')->unsigned();
            $table->integer('id_academico')->unsigned()->nullable();
            $table->integer('id_organizacion')->unsigned()->nullable();

            $table->timestamps();


            //Relation
         //   $table->foreign('id_actividad_titulacion')->references('id')->on('actividad_titulacions')
         //       ->onDelete('cascade')
         //       ->onUpdate('cascade');
//
         //   $table->foreign('id_academico')->references('id')->on('academicos')
         //       ->onDelete('cascade')
         //       ->onUpdate('cascade');
//
         //   $table->foreign('id_organizacion')->references('id')->on('organizaciones')
         //       ->onDelete('cascade')
         //       ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academico_correctora');
    }
}
