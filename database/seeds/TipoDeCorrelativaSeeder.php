<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoDeCorrelativaSeeder extends Seeder
{
    public function run()
    {
        $tipos_de_correlativas = [
            'Rendir',
            'Cursar',
        ];

        foreach ($tipos_de_correlativas as $key => $value) {
            DB::table('tipos_de_correlativas')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
