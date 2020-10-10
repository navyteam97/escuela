<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CuadraSeeder extends Seeder
{
    public function run()
    {
        $cuadras = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
        ];

        foreach ($cuadras as $key => $value) {
            DB::table('cuadras')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
