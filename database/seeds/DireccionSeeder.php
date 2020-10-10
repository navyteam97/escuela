<?php

use Illuminate\Database\Seeder;

class DireccionSeeder extends Seeder
{
    public function run()
    {
        factory(App\Direccion::class, 1000)->create();
    }
}
