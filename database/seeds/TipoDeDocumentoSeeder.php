<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeDocumentoSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_documentos = [
            'DNI',
            'Libreta de Enrolamiento',
            'Cédula Provincial',
        ];

        foreach ($tipos_de_documentos as $key => $value) {
            DB::table('tipos_de_documentos')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
