<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeResponsableSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_responsables = [
            'Padre',
            'Madre',
        ];

        foreach ($tipos_de_responsables as $key => $value) {
            DB::table('tipos_de_responsables')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
