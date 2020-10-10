<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TurnoSeeder extends Seeder
{
    public function run()
    {
        $turnos = [
            'Mañana',
            'Tarde',
        ];

        foreach ($turnos as $key => $value) {
            DB::table('turnos')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
