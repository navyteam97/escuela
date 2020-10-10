<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeImagenSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_imagenes = [
            'Documento frente',
            'Documento dorso',
            'Perfil',
            'Materia',
            'Carrera',
        ];

        foreach ($tipos_de_imagenes as $key => $value) {
            DB::table('tipos_de_imagenes')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
