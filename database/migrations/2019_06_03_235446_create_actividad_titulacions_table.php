<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_titulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',128)->unique();
            $table->enum('estado',['INGRESADA','FINALIZADA','ANULADA','ACEPTADA']);

            $table->date('fecha_registro')->format('d/m/Y');
            $table->integer('semestre_registro')->unsigned();

            $table->date('fecha_inicio')->format('d/m/Y')->nullable();
            $table->date('fecha_termino')->format('d/m/Y')->nullable();

            $table->date('fecha_examen')->nullable($value=true);

            $table->double('nota',2,1)->unsigned()->nullable($value=true);
            
            $table->integer('id_organizacion')->unsigned()->nullable($value=true);


            $table->integer('id_tipo_actividad')->unsigned();

            $table->timestamps();


            //Relation
            $table->foreign('id_tipo_actividad')->references('id')->on('tipo_actividads')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_organizacion')->references('id')->on('organizaciones')
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
        Schema::dropIfExists('actividad_titulacions');
    }
}
