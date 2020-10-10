<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 1000),
        'apellido' => $faker->lastName,
        'nombre' => $faker->firstName,
        'nacimiento' => $faker->date($format = 'Y-m-d', $max = '2015-06-09'),
        'genero_id' => $faker->numberBetween($min = 1, $max = 2),
        'contacto_id' => $faker->numberBetween($min = 1, $max = 1000),
        'documento_id' => $faker->numberBetween($min = 1, $max = 1000), 
    ];
});
