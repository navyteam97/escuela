<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProvinciaSeeder extends Seeder
{
    public function run()
    {
        $provincias = [
            ['Corrientes', 1],
            ['Entre Rios', 1],
            ['Misiones', 1],
            ['Formosa', 1],
            ['Chaco', 1],
            ['Salta', 1],
        ];

        foreach ($provincias as $key => $value) {
            DB::table('provincias')->insert([
                'descripcion' => $value[0],
                'pais_id' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
