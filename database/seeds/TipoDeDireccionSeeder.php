<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeDireccionSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_direcciones = [
            'Físico',
            'Lugar de nacimiento',
            'Red social',
            'Página web',
            'Georeferencia',
        ];

        foreach ($tipos_de_direcciones as $key => $value) {
            DB::table('tipos_de_direcciones')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
