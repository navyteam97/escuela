<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarreraSeeder extends Seeder
{
    public function run()
    {
        $carreras = [
            'Ciclo Básico',
            'Bachiller en Ciencias Naturales',
            'Bachiller en Ciencias Sociales',
            'Bachiller en Economía y Administración',
        ];

        foreach ($carreras as $key => $value) {
            DB::table('carreras')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
