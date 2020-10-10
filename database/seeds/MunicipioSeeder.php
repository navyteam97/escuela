<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MunicipioSeeder extends Seeder
{
    public function run()
    {
        $municipios = [
            ['Paso de los Libres', 1],
            ['Bonpland', 1],
            ['Parada Pucheta', 1],
            ['Tapebicuá', 1],
        ];

        foreach ($municipios as $key => $value) {
            DB::table('municipios')->insert([
                'descripcion' => $value[0],
                'departamento_id' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
