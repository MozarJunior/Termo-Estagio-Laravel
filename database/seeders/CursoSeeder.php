<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nome' => 'MEDIO INTEGRADO - TECNICO EM INFORMATICA',
            'carga_horaria' => 400,
        ]);
        DB::table('cursos')->insert([
            'nome' => 'MEDIO INTEGRADO - TECNICO EM EDIFICAÇÕES',
            'carga_horaria' => 400,
        ]);
        DB::table('cursos')->insert([
            'nome' => 'MEDIO INTEGRADO - TECNICO EM AGROPECUARIA',
            'carga_horaria' => 400,
        ]);
    }
}
