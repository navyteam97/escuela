<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        $departamentos = [
            ['Paso de los Libres', 1],
            ['Goya', 1],
            ['Monte Caceros', 1],
            ['Corrientes', 1],
            ['Ituzaingo', 1],
            ['Saladas', 1],
        ];

        foreach ($departamentos as $key => $value) {
            DB::table('departamentos')->insert([
                'descripcion' => $value[0],
                'provincia_id' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
