<!-- Kath -->
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="form-section">
                <h1>Acceder</h1>
                <form method="POST" action="">
                    @csrf
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" required>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required>
                    <a href="{{ route('proyectos.index') }}"><button type="button">Acceso</button></a>
                </form>
                <div class="links">
                    <a href="#">¿Se te olvidó tu contraseña?</a>
                    <a href="{{ route('registro') }}">¿No tienes cuenta? Regístrate</a>
                </div>

            </div>
            <div class="image-section">
                <img src="{{ asset('img/polii.png') }}">
            </div>
        </div>
        <div class="footer-text">
            Ingeniería en Sistemas Computacionales <br>
            Universidad Politécnica de Querétaro
        </div>
    </div>
</body>
</html>
