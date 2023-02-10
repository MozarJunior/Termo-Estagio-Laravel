<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Três primeiros endereços referentes as concedentes
        DB::table('enderecos')->insert([
            'logradouro' => 'Praça Coronel Jeremias Parente de Sá',
            'numero' => '97',
            'bairro' => 'Centro',
            'cep' => '56190-000',
            'cidade' => 'Terra Nova',
            'uf' => 'PE'
        ]);
        DB::table('enderecos')->insert([
            'logradouro' => 'Rua Otávio Leitinho',
            'numero' => '158',
            'bairro' => 'Centro',
            'cep' => '56000-000',
            'cidade' => 'Salgueiro',
            'uf' => 'PE'
        ]);
        DB::table('enderecos')->insert([
            'logradouro' => 'Vila Campinhos',
            'numero' => '1',
            'bairro' => 'Distrito Vasques',
            'cep' => '56000-000',
            'cidade' => 'Salgueiro',
            'uf' => 'PE'
        ]);

        //Endereço referente aos orientadores
        DB::table('enderecos')->insert([
            'logradouro' => 'Rua Amâncio Araújo',
            'numero' => '1',
            'bairro' => 'COHAB Massangano',
            'cep' => '56310-220',
            'cidade' => 'Petrolina',
            'uf' => 'PE'
        ]);

        //Endereço referente aos representantes
        DB::table('enderecos')->insert([
            'logradouro' => 'Avenida Agamenon Magalhães',
            'numero' => '3',
            'bairro' => 'Centro',
            'cep' => '56163-970',
            'cidade' => 'Parnamirim',
            'uf' => 'PE'
        ]);
    }
}
