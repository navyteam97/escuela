<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CalificacionSeeder extends Seeder
{
    public function run()
    {
        $calificaciones = [
            'Excelente',
            'Muy bueno',
            'Bueno',
            'Regular',
            'Insuficiente',
            'Reprobado',
            'Aprobado',
        ];

        foreach ($calificaciones as $key => $value) {
            DB::table('calificaciones')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
