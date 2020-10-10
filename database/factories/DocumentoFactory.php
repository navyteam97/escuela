<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Documento;
use Faker\Generator as Faker;

$factory->define(Documento::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->unique()->numberBetween($min = 32974304, $max = 38315907),
        'tipoDeDocumento_id' => 1,
    ];
});
