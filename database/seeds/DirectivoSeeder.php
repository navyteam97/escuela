<?php

use Illuminate\Database\Seeder;

class DirectivoSeeder extends Seeder
{
    public function run()
    {
        factory(App\Directivo::class, 20)->create();
    }
}
