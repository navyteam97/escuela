<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeNotaSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_notas = [
            'Calificación número',
            'Calificación definitiva',
            'Período 1',
            'Período 2',
            'Período 3',
            'Promedio anual',
            'Diciembre',
            'Marzo',
            'Compensatorio',
        ];

        foreach ($tipos_de_notas as $key => $value) {
            DB::table('tipos_de_notas')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
