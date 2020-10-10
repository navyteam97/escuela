<?php

use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    public function run()
    {
        factory(App\Documento::class, 1000)->create();
    }
}
