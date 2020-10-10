<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeCursoSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_cursos = [
            'Primer año',
            'Segundo año',
            'Tercero año',
            'Cuarto año',
            'Quinto año',
            'Sexto año',
            'Septimo año',
        ];

        foreach ($tipos_de_cursos as $key => $value) {
            DB::table('tipos_de_cursos')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
