<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Horario;
use Faker\Generator as Faker;

$factory->define(Horario::class, function (Faker $faker) {
    return [
        'ingreso' => $faker->time($format = 'H:i:s'),
        'egreso' => $faker->time($format = 'H:i:s'),
        'turno_id' => $faker->numberBetween($min = 1, $max = 2),
        'cajaCurricular_id' => $faker->unique()->numberBetween($min = 1, $max = 158),
    ];
});
