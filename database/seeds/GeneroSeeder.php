<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        $generos = [
            'Masculino',
            'Femenino',
        ];

        foreach ($generos as $key => $value) {
            DB::table('generos')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
