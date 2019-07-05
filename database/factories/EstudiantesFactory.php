<?php

use Faker\Generator as Faker;

$factory->define(App\Estudiante::class, function (Faker $faker) {
    
    $carreras = ['ICCI','IenCI','IECI'];
    
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'rut' => random_int(100000000,999999999),
        'correo' => $faker->unique()->safeEmail,
        'carrera' => $carreras[rand(0,2)],
        'telefono' => random_int(00000000,99999999),
    ];
});
