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
                'hobby' => 'Sempre fazendo o melhor para você!',
                'datanascimento' => '12-13-1966'
            ]);
        }

    }
}
