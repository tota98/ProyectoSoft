<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',255);
            $table->string('apellido',255);
            $table->string('rut',15)->unique();
            $table->string('correo',128)->unique();
            $table->integer('telefono')->unsigned();
            
            $table->integer('actividad_titulacion_id')->unsigned()->nullable();
            
            

            $table->foreign('actividad_titulacion_id')->references('id')->on('actividad_titulacions')
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
        Schema::dropIfExists('estudiantes');
    }
}
