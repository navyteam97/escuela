<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ComponenteDeFormularioSeeder extends Seeder
{
    public function run()
    {
        $componentes_de_formularios = [
            'Datos del alumno',
            'Datos de la madre',
            'Datos del padre',
            'Materias que adeuda',
            'Medidas antropometrícas',
            'Sistema cardiovascular',
            'Intervenciones quirurgicas',
            'Enfermedades contraídas',
            'Cabecera',
            'Cuerpo',
        ];

        foreach ($componentes_de_formularios as $key => $value) {
            DB::table('componentes_de_formularios')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
