<?php

use Faker\Generator as Faker;

$factory->define(App\Tipo_actividad::class, function (Faker $faker) {
    $participacion = ["on","off"];
    return [
        //
        'nombre' => $faker->name,
        'cant_max' => rand(1,5),
        'duracion' => rand(1,4),
        'participacion_organizacion' => $participacion[rand(0,1)],

    ];
});
