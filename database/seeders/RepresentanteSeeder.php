<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representantes')->insert([
            'cargo' => 'Gerente',
            'pessoa_id' => 4,
            'concedente_id' => 1,
        ]);
        DB::table('representantes')->insert([
            'cargo' => 'Gerente',
            'pessoa_id' => 5,
            'concedente_id' => 2,
        ]);
        DB::table('representantes')->insert([
            'cargo' => 'Gerente',
            'pessoa_id' => 6,
            'concedente_id' => 3,
        ]);
    }
}
