<!-- Kath -->
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="{{ asset('css/registro.css') }}">
<body>
    <div class="register-box">
        <div class="form-container">
            <h1>Registrar</h1>
            <form action="#" method="POST">
                @csrf
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido_paterno">Apellido Paterno</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required>

                <label for="apellido_materno">Apellido Materno</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required>

                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>

                <label>Tipo de usuario</label>
                <div class="radio-group">
                    <label><input type="radio" name="tipo_usuario" value="alumno"> Alumno</label>
                    <label><input type="radio" name="tipo_usuario" value="asesor"> Asesor</label>
                </div>

                <button type="submit">Continuar</button>
            </form>
            <a href="#" class="regresar">Regresar</a>
        </div>

        <div class="image-container">
            <img src="{{ asset('img/polii.png') }}">
        </div>
    </div>
</body>
</html>
