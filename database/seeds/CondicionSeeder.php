<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CondicionSeeder extends Seeder
{
    public function run()
    {
        $condiciones = [
            'Titular',
            'Suplente',
            'Regular',
            'Libre',
        ];

        foreach ($condiciones as $key => $value) {
            DB::table('condiciones')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
