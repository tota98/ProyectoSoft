<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   protected $fillable = ["nombre","apellido","rut","correo","Carrera","telefono"];
    //
}
