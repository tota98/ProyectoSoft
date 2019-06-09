<?php

use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'carrera' => $faker->name,
        'telefono' => int_random(10),
    ];
});
