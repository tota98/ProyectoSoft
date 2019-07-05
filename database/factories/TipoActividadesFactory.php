<?php

use Faker\Generator as Faker;

$factory->define(App\Tipo_actividad::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'cant_max' => rand(1,15),
        'duracion' => rand(1,4),
        'participacion_organizacion' => $faker->boolean($chanceOfGettingTrue = 50),

    ];
});
