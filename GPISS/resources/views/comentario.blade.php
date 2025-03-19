<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="{{ asset('css/comentario.css') }}">
@extends('layouts.header1')
@section('contenido')
<body>
<div class="contenedor">
        <h2>Descripción</h2>
        <div class="secciones">
            <div class="descripcion">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="comentario">
                <textarea placeholder="Agrega un comentario"></textarea>
                <button class="btn-enviar">Enviar comentario</button>
            </div>
        </div>
        <button class="btn-cancelar" href=>Cancelar</button>
    </div>

</body>
@endsection
</html>