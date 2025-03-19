<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LideresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lideres')->insert([
            ['matricula' => 'UPQ123', 'carrera' => 'Sistemas Computacionales', 'id_usuario' => 1]
        ]);
    }
}
