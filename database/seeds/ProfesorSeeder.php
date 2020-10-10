<?php

use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    public function run()
    {
        factory(App\Profesor::class, 180)->create();
    }
}
