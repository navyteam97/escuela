<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BarrioSeeder extends Seeder
{
    public function run()
    {
        $barrios = [
            'Caá Guazú',
            '145 Viviendas',
            'San José',
            'Yapeyú',
            'Flores',
            '60 Viviendas',
            'Estrella',
        ];

        foreach ($barrios as $key => $value) {
            DB::table('barrios')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
