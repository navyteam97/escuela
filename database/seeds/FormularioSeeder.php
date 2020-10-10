<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FormularioSeeder extends Seeder
{
    public function run()
    {
        $formularios = [
            // Ficha de reconocimiento Medico
                // Medidas Antropometricas
            [null, null, 165, null, 5, 1, 7, 2],
            [null, null, 67, null, 5, 2, 7, 2],
            [null, null, null, null, 5, 3, 7, 2],
            [null, null, null, null, 5, 4, 7, 2],
            [true, null, null, null, 5, 5, 7, 2],
            [null, null, null, null, 5, 6, 7, 2],
            [null, null, null, null, 5, 7, 7, 2],
                // Sistema Cardiovascular
            [true, null, null, null, 6, 5, 7, 2],
            [null, null, null, null, 6, 8, 7, 2],
            [null, null, 80, null, 6, 9, 7, 2],
            [null, null, null, 100.80, 6, 10, 7, 2],
            [null, null, null, null, 6, 5, 7, 2],
            [null, null, null, null, 6, 11, 7, 2],
            [null, null, null, null, 6, 12, 7, 2],
            [null, null, null, null, 6, 13, 7, 2],
                // Intervenciones Quirurgicas
            [null, null, null, null, 7, 14, 7, 2],
            [null, null, null, null, 7, 15, 7, 2],
            [null, null, null, null, 7, 16, 7, 2],
            [null, null, null, null, 7, 17, 7, 2],
            [null, null, null, null, 7, 18, 7, 2],
            [null, null, null, null, 7, 19, 7, 2],
            [null, null, null, null, 7, 13, 7, 2],
                // Enfermedades Contraidas
            [true, null, null, null, 8, 20, 7, 2],
            [true, null, null, null, 8, 21, 7, 2],
            [null, null, null, null, 8, 22, 7, 2],
            [null, null, null, null, 8, 23, 7, 2],
            [null, null, null, null, 8, 24, 7, 2],
            [null, null, null, null, 8, 25, 7, 2],
            [null, null, null, null, 8, 26, 7, 2],
            [null, null, null, null, 8, 27, 7, 2],
            [null, null, null, null, 8, 28, 7, 2],
            [null, null, null, null, 8, 29, 7, 2],
            [null, null, null, null, 8, 30, 7, 2],
            [null, null, null, null, 8, 31, 7, 2],
            [null, null, null, null, 8, 32, 7, 2],
            [null, null, null, null, 8, 33, 7, 2],
            [null, null, null, null, 8, 34, 7, 2],
            [null, 'si', null, null, 8, 35, 7, 2],
            [null, 'letra de medico', null, null, 8, 36, 7, 2],
            [null, null, null, null, 8, 19, 7, 2],
            [null, null, null, null, 8, 13, 7, 2],
        ];

        foreach ($formularios as $key => $value) {
            DB::table('formularios')->insert([
                'respuestaBinaria' => $value[0],
                'respuestaTextual' => $value[1],
                'respuestaNumerica' => $value[2],
                'respuestaDecimal' => $value[3],
                'componenteDeFormulario_id' => $value[4],
                'entrada_id' => $value[5],
                'alumno_id' => $value[6],
                'ficha_id' => $value[7],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
