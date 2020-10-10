<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InstitucionSeeder extends Seeder
{
    public function run()
    {
        $instituciones = [
            ['Escuela Verde', 1000],
        ];

        foreach ($instituciones as $key => $value) {
            DB::table('instituciones')->insert([
                'descripcion' => $value[0],
                'contacto_id' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
