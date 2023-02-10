<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contas')->insert([
            'nome' => 'Francisco Mozar Rodrigues Junior',
            'matricula' => '202114010001',
            'password' => Hash::make('password'),
            'perfil' => 4,
        ]);
    }
}
