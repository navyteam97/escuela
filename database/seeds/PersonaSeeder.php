<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        factory(App\Persona::class, 1000)->create();
    }
}
