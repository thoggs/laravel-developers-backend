<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevelopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('developers')->insert([
                'nome' => 'Gazin developer',
                'sexo' => 'O',
                'idade' => 55,
                'hobby' => 'Uma das melhores empresas na gestão de pessoas',
                'datanascimento' => '10/03/1993'
            ]);
        }

    }
}
