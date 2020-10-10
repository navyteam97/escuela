<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        $divisiones = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
        ];

        foreach ($divisiones as $key => $value) {
            DB::table('divisiones')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
