<!-- Kath -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #06132E;
        }

        .login-box {
            width: 1400px;
            height: 600px;         
            background-color: #06132E;
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }


        .form-section {
            flex: 1;
            background-color:rgb(245, 245, 245);
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-section h1 {
            margin-bottom: 20px;
            color: #06132E;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="email"], input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            width: 100%;
        }

        button {
            background-color: #06132E;
            color: #fff;
            border: none;
            padding: 10px 60px;      /* ⬅️ Más padding para hacerlo más grande */
            cursor: pointer;
            border-radius: 5px;
            font-size: 15px;         /* ⬅️ Letra más grande */
            display: block;
            margin: 20px auto;       /* ⬅️ Centro horizontal */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);  /* Opcional: sombra para que resalte */
            transition: background-color 0.3s ease;   /* Animación suave al pasar el mouse */
        }

        button:hover {
            background-color: #06132E;  /* Efecto hover más oscuro */
        }

        .links {
            display: flex;
            justify-content: center;  /* ⬅️ Centra ambos enlaces */
            gap: 20px;                /* ⬅️ Espacio entre ellos */
            margin-top: 10px;
        }

        .form-section a {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }

        .image-section {
            flex: 1;
            background: #D9D9D9;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
        }

        .footer-text {
            position: absolute;
            bottom: 10px;
            font-size: 12px;
            color:rgb(255, 255, 255);
            text-align: center;
        }
    </style>
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
                    <button type="submit">Acceso</button>
                </form>
                <div class="links">
                    <a href="#">¿Se te olvidó tu contraseña?</a>
                    <a href="#">¿No tienes cuenta? Regístrate</a>
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
