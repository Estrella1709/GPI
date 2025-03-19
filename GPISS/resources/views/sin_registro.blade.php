@extends('layouts.header2')

@section('contenido')
<div class="container text-center">
    <h2>¡Ups! En este momento no has registrado tu proyecto integrador</h2>
    <p>Por favor, asegúrate de que tu proyecto sea registrado antes de la fecha límite.</p>
    <p class="text-danger">Fecha límite de registro: 00/00/0000 00:00</p>
    <a href="{{ route('proyecto.registro') }}" class="btn btn-primary">Registrar PI</a>
</div>
@endsection
