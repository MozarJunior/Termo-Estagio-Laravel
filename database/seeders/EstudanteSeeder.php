<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudantes')->insert([
            'periodo_curso' => 0,
            'pessoa_id' => 0,
            'orientador_id' => 0,
            'supervisor_id' => 0,
            'conta_id' => 1,
            'curso_id' => 0,
        ]);
    }
}
