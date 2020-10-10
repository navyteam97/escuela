<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarreraInstitucionSeeder extends Seeder
{
    public function run()
    {
        $carreras_instituciones = [
            [1, 1, 1],
            [2, 1, 1],
            [3, 1, 1],
            [4, 1, 1],
        ];

        foreach ($carreras_instituciones as $key => $value) {
            DB::table('carreras_instituciones')->insert([
                'carrera_id' => $value[0],
                'institucion_id' => $value[1],
                'directivo_id' => $value[2],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
