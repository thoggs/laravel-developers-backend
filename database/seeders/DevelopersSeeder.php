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
                'nome' => 'Thiago Rodrigues',
                'sexo' => 'O',
                'idade' => 31,
                'hobby' => 'Programar e estudar',
                'datanascimento' => '10-03-1991'
            ]);
        }

    }
}
