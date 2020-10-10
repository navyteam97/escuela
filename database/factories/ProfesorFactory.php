<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 451, $max = 631),
    ];
});
