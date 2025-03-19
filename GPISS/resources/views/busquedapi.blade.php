@extends('layouts.header3   ')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/busquedapi.css') }}">
<br><br>
<!-- Barra de búsqueda -->
<div class="search-bar">
    <input type="text" id="searchInput" placeholder="Buscar proyecto..." onkeyup="filterProjects()">
</div>

<div class="content">
    <div class="left-panel">

        <div class="proyectos-container">
            <h2 class="proyectos-title">Proyectos registrados</h2>
        </div>

        <!-- Mostrar los proyectos desde la base de datos -->
        <div class="proyecto-item" onclick="showDetails('Titulo', 'Lider', 'Integrantes', 'Descripcion', 'Objetivo General')">
            <div class="proyecto-info">
                <p>Titulo proyecto: </p>
                <span>Lider proyecto: </span>
            </div>
            <button type="submit" class="borrar-proyecto">Detalles</button>
        </div>

    </div>

    <div class="right-panel">
        <h2 class="proyectos-title">Detalles del proyecto</h2>

        <div class="detalles-proyectos">
            <div class="details-container">
                <div class="proyecto-info">
                    <div class="details-info">
                        <p>Titulo: <span id="titulo"></span></p>
                        <br>
                        <p>Lider: <span id="lider"></span></p>
                        <br>
                        <p>Integrantes: <span id="integrantes"></span></p>
                        <br>
                        <p>Descripción: <span id="descr"></span></p>
                        <br>
                        <p>Objetivo General: <span id="objetivo"></span></p>
                    </div>
                </div>
            </div>
            <br>
            <!-- Botón Revisar -->
            <button class="revisar-proyecto">Revisar</button>
        </div>

    </div>
</div>

<script src="{{ asset('js/busquedapi.js') }}"></script>

<script>
function filterProjects() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const projects = document.querySelectorAll('.proyecto-item');

    projects.forEach(project => {
        const title = project.querySelector('.proyecto-info p').innerText.toLowerCase();
        const leader = project.querySelector('.proyecto-info span').innerText.toLowerCase();
        
        if (title.includes(filter) || leader.includes(filter)) {
            project.style.display = "flex";
        } else {
            project.style.display = "none";
        }
    });
}
</script>

@endsection
