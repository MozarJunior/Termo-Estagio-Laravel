<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ConcedenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concedentes')->insert([
            'nome' => 'FORTTI INTERNATIONAL',
            'cnpj' => '04.057.696/0001-43',
            'razao_social' => 'EMPRESA DE PEQUENO PORTE',
            'email' => 'fortti@empresa.com',
            'telefone' => '(87) 3946-6241',
            'endereco_id' => 1,
        ]);
        DB::table('concedentes')->insert([
            'nome' => 'IMPACT INTERNATIONAL',
            'cnpj' => '82.432.711/0001-08',
            'razao_social' => 'EMPRESA DE PEQUENO PORTE',
            'email' => 'impact@empresa.com',
            'telefone' => '(87) 2516-2222',
            'endereco_id' => 2,
        ]);
        DB::table('concedentes')->insert([
            'nome' => 'BALANCE INTERNARIONAL',
            'cnpj' => '84.038.861/0001-59',
            'razao_social' => 'EMPRESA DE PEQUENO PORTE',
            'email' => 'balance@empresa.com',
            'telefone' => '(81) 2187-5781',
            'endereco_id' => 3,
        ]);
    }
}
