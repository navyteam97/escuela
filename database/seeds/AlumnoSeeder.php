<?php

use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        factory(App\Alumno::class, 450)->create();
    }
}
