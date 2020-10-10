<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacto;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'telefono' => $faker->unique()->phoneNumber,
        'correo' => null,
        'direccion_id' => $faker->numberBetween($min = 1, $max = 1000),
    ];
});
