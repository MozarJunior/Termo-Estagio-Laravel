<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Os três primeiros são os orientadores
        DB::table('pessoas')->insert([
            'nome' => 'EMANUEL BEZERRA',
            'cpf' => '603.912.664-70',
            'rg' => '42.311.589',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(84) 2558-8546',
            'email' => 'emanuel@orientador.com',
            'endereco_id' => 4,
        ]);
        DB::table('pessoas')->insert([
            'nome' => 'EDGAR BATISTA',
            'cpf' => '885.021.084-17',
            'rg' => '49.988.704',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(81) 3118-4226',
            'email' => 'edgar@orientador.com',
            'endereco_id' => 4,
        ]);
        DB::table('pessoas')->insert([
            'nome' => 'ERIC RODRIGUES',
            'cpf' => '383.451.314-84',
            'rg' => '24.531.160',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(81) 3346-5703',
            'email' => 'eric@orientador.com',
            'endereco_id' => 4,
        ]);

        //Os três a seguir são os representantes das concedentes
        DB::table('pessoas')->insert([
            'nome' => 'PEDRO HENRIQUE',
            'cpf' => '356.888.934-00',
            'rg' => '25.838.591',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(81) 3843-3150',
            'email' => 'pedro@representante.com',
            'endereco_id' => 5,
        ]);
        DB::table('pessoas')->insert([
            'nome' => 'FRANCISCO CASTRO',
            'cpf' => '078.748.674-40',
            'rg' => '45.348.673',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(87) 3632-5247',
            'email' => 'francisco@representante.com',
            'endereco_id' => 5,
        ]);
        DB::table('pessoas')->insert([
            'nome' => 'MOACIR MOREIRA',
            'cpf' => '463.016.664-53',
            'rg' => '16.837.684',
            'orgao_expedidor' => 'SDS-PE',
            'data_nascimento' => '',
            'telefone' => '(81) 2351-1824',
            'email' => 'moacir@representante.com',
            'endereco_id' => 5,
        ]);
    }
}
