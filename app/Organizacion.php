<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    //
    protected $fillable = [
        'nombre_organizacion','nombre_tutor','correo_tutor',
    ];

}
