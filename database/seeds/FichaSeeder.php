<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FichaSeeder extends Seeder
{
    public function run()
    {
        $fichas = [
            'Ficha de inscripción al ciclo básico',
            'Ficha de reconocimiento medico',
            'Ficha individual del alumno',
        ];

        foreach ($fichas as $key => $value) {
            DB::table('fichas')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
