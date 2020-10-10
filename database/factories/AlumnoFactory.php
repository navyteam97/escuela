<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 450),
        'condicion_id' => $faker->numberBetween($min = 3, $max = 4),
    ];
});
