<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CoorteSeeder extends Seeder
{
    public function run()
    {
        $coortes = [
            '2018',
            '2019',
            '2020',
        ];

        foreach ($coortes as $key => $value) {
            DB::table('coortes')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
