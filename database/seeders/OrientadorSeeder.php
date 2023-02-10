<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrientadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orientadores')->insert([
            'pessoa_id' => 1
        ]);
        DB::table('orientadores')->insert([
            'pessoa_id' => 2
        ]);
        DB::table('orientadores')->insert([
            'pessoa_id' => 3
        ]);
    }
}
