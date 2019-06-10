<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_actividad extends Model
{
    //
    protected $fillable = [
        'nombre','cant_max','duracion','participacion_organizacion',
    ];

}
