<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $proyectoRegistrado = false; // Simulación hasta que haya BD
        return view($proyectoRegistrado ? 'registro_proyecto' : 'sin_registro');
    }

    public function registro()
    {
        return view('registro_proyecto');
    }
}
