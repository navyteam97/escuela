<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EntradaSeeder extends Seeder
{
    public function run()
    {
        $entradas = [
            'Talla',
            'Peso',
            'Estado físico S/BMI:Peso',
            'Bajo peso',
            'Normal',
            'Sobrepeso',
            'Obesidad',
            'Anormal',
            'Pulsaciones',
            'P/MTA',
            'Hipotensión',
            'Hipertensión',
            'Observaciones',
            'Hernia',
            'Corazón',
            'Rodilla',
            'Amígdalas',
            'Apéndice',
            'Otros',
            'Varicela',
            'Asma',
            'Papera',
            'Sarampión',
            'Rubeola',
            'Hepatitis',
            'Micosis',
            'Fiebre amarilla',
            'Fiebre rosa',
            'Epilepsia',
            'Tuberculosis',
            'Anorexia',
            'Bulimia',
            'Anemia',
            'Tiroides',
            'Alergias',
            'Causa',
            'Convive',
            'Trabaja',
            'Cobertura médica',
        ];

        foreach ($entradas as $key => $value) {
            DB::table('entradas')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
