<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion De proyectos Integradores</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="container">
        
        <h1><img id="logo" src="{{ asset('img/logo1.png') }}"> Gestión de Proyectos Integradores</h1>
        <section>
        <a href="{{ route('login') }}"><h2 id="home">Acceder</h2></a>
        </section>
    </header>
    <main>
        @yield('contenido')

       
    </main>

    <footer>
        <h5>Universidad Politécnica de Querétaro</h5>
        <h5>Ingeniería en Sistemas Computacionales</h5>
    </footer>
    
</body>
</html>