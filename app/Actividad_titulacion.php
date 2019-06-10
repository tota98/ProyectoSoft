<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad_titulacion extends Model
{
    //
    protected $fillable = [
        'titulo','estado','fecha_registro','semestre_registro','fecha_inicio',
        	'fecha_termino','fecha_examen','nota',
        	'id_organizacion','id_tipo_actividad',
    ];

}
