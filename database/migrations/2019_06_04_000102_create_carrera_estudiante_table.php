<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_estudiante', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('id_carrera')->unsigned();
            $table->integer('id_estudiante')->unsigned();

            $table->timestamps();

            //Relation
            $table->foreign('id_carrera')->references('id')->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_estudiante')->references('id')->on('estudiantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera_estudiante');
    }
}
