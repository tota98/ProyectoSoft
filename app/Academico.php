<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    //
    protected $fillable = [
        'rut','nombre','apellido','correo',
    ];

}
