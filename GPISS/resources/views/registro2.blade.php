<!-- Kath -->
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="{{ asset('css/registro.css') }}">
<body>
<div class="register-box">
    <div class="form-container">
        <h2>Registrar</h2>
        <form action="/guardar" method="POST">
            @csrf
            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" required>

            <label for="carrera">Carrera</label>
            <input type="text" id="carrera" name="carrera" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <p style="color: red; font-weight: bold; margin-top: 10px;">
                Recuerda guardar esta contraseña
            </p>

            <button type="submit" class="btn-continuar">Continuar</button>
        </form>
        <a href="{{ route('registro') }}" class="regresar">Regresar</a>
    </div>
    <div class="image-container">
        <img src="{{ asset('img/polii.png') }}" alt="Mascota UPQ">
    </div>
</div>

</body>
</html>