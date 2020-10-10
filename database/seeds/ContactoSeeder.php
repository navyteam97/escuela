<?php

use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    public function run()
    {
        factory(App\Contacto::class, 1000)->create();
    }
}
