<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    //
    protected $fillable = [
        'nombre','apellido','rut','correo',
    ];

}
