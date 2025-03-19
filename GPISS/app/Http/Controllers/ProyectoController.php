<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        // Cargar proyectos con lider y usuario asociados
        $proyectos = Proyecto::with('lider.usuario')->get();

        return view('busquedapi', compact('proyectos'));
    }
}
