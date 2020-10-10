<?php

use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    public function run()
    {
        factory(App\Horario::class, 158)->create();
    }
}
