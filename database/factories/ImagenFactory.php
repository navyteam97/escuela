<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Imagen;
use Faker\Generator as Faker;

$factory->define(Imagen::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->url,
        'persona_id' => null,
        'carrera_id' => null,
        'cajaCurricular_id' => $faker->unique()->numberBetween($min = 1, $max = 158),
        'tipoDeImagen_id' => 4,
    ];
});
