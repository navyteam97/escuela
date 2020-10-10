<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Directivo;
use Faker\Generator as Faker;

$factory->define(Directivo::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 632, $max = 652),
    ];
});
