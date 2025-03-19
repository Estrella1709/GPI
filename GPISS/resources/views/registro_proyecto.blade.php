@extends('layouts.header2')

@section('contenido')

<br><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h2>Registro de Proyecto</h2>
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Elige un buen nombre">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del Proyecto</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="objetivo" class="form-label">Objetivo General del Proyecto</label>
            <input type="text" class="form-control" id="objetivo" name="objetivo">
        </div>
        <div class="mb-3">
            <label for="integrantes" class="form-label">Integrantes del Proyecto</label>
            <textarea class="form-control" id="integrantes" name="integrantes" placeholder="Ej: ALVARADO SALVANDRA, CECILIA S191"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Proyecto</button>
    </form>
</div>
<br>
@endsection
