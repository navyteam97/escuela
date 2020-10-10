<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CursoSeeder extends Seeder
{
    public function run()
    {
        $cursos = [
            [1, 1], [2, 1], [3, 1], [4, 1], // 1 - 4
            [1, 2], [2, 2], [3, 2], [4, 2], // 5 - 8
            [1, 3], [2, 3], [3, 3], [4, 3], // 9 - 12
            [1, 4], [2, 4], [3, 4], [4, 4], // 13 - 16
            [1, 5], [2, 5], [3, 5], [4, 5], // 17 - 20
            [1, 6], [2, 6], [3, 6], [4, 6], // 21 - 24
            [1, 7], [2, 7], [3, 7], [4, 7], // 25 - 28
        ];

        foreach ($cursos as $key => $value) {
            DB::table('cursos')->insert([
                'division_id' => $value[0],
                'tipoDeCurso_id' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
