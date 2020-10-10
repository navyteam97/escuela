<?php

use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    public function run()
    {
        factory(App\Imagen::class, 158)->create();
    }
}
