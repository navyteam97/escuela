<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeInscripcionSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_inscripciones = [
            'Anual',
            'Rendir',
        ];

        foreach ($tipos_de_inscripciones as $key => $value) {
            DB::table('tipos_de_inscripciones')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
