<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad_profesor extends Model
{
    protected $fillable = [
        'id_actividad_titulacion','id_academico',
      ];
}
