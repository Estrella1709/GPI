<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['nombre' => 'Estrella', 'apellido_paterno' => 'Aguillón', 'apellido_materno' => 'Torrijos', 'correo' => 'estrella@example.com', 'contraseña' => bcrypt('password'), 'rol' => 'Líder'],
            ['nombre' => 'Juan', 'apellido_paterno' => 'Pérez', 'apellido_materno' => 'González', 'correo' => 'juan@example.com', 'contraseña' => bcrypt('password'), 'rol' => 'Asesor']
        ]);
    }
}
