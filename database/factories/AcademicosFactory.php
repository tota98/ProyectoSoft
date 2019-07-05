<?php

use Faker\Generator as Faker;

$factory->define(App\Academico::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'rut' => random_int(100000000,999999999),
        'correo' => $faker->unique()->safeEmail,
    ];
});
