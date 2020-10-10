<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Direccion;
use Faker\Generator as Faker;

$factory->define(Direccion::class, function (Faker $faker) {
    return [
        'chacra' => null,
        'sector' => null,
        'altura' => $faker->numberBetween($min = 500, $max = 10000),
        'casa' => null,
        'departamento' => null,
        'piso' => null,
        'descripcion' => null,
        'barrio_id' => null,
        'cuadra_id' => null,
        'calle_id' => $faker->numberBetween($min = 1, $max = 113),
        'municipio_id' => 1,
        'tipoDeDireccion_id' => 1,
    ];
});
