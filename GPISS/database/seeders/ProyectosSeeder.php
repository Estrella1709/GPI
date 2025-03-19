<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            ['nombre' => 'Sistema de Inventarios', 'descripcion' => 'Desarrollo de un sistema para gestionar inventarios de una tienda.', 'ogeneral' => 'Optimizar la gestión de inventarios.', 'integrantes' => 4, 'fecha_entregado' => null, 'fecha_limite' => '2025-06-30', 'id_lider' => 1, 'id_asesor' => 1, 'id_estado' => 2],
            ['nombre' => 'Plataforma de E-learning', 'descripcion' => 'Plataforma para cursos en línea con videoconferencias.', 'ogeneral' => 'Facilitar el acceso a educación virtual.', 'integrantes' => 5, 'fecha_entregado' => null, 'fecha_limite' => '2025-07-15', 'id_lider' => 1, 'id_asesor' => 1, 'id_estado' => 1]
        ]);
        
    }
}
