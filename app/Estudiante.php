<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   protected $fillable = [
        'nombre','apellido','rut','correo','telefono','actividad_titulacion_id',
    ];

}
