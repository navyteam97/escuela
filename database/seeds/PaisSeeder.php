<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaisSeeder extends Seeder
{
    public function run()
    {
        $paises = [
            'Argentina',
            'Brasil',
            'Uruguay',
            'Paraguay',
            'Chile',
            'Bolivia',
        ];

        foreach ($paises as $key => $value) {
            DB::table('paises')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
