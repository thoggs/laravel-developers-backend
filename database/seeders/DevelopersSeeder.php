<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DevelopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        for ($i = 0; $i < 100; $i++)
        {
            DB::table('developers')->insert([
                'nome' => Str::random(10),
                'sexo' => 'm' | 'f',
                'idade' => 30,
                'hobby' => Str::random(50),
                'datanascimento' => '12-13-1966'
            ]);
        }

    }
}
