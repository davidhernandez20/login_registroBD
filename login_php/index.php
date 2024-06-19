<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-TgZapvwkoZzeH0rdo3+QY1pZiK9/YpLwlO9lV9k0Iv1Xxkbb3n5m4P2r3p2bRo7a/Gf7msQo+WDUVqYw2L89zw==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            font-family: "Jost", sans-serif; /* Cambia 'Arial' por la fuente que prefieras */
            color: #ffffff;
        }

        .login-container {
            background-color: #333333;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
            padding: 40px;
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 15px;
            color: #ffffff;
            background-color: #333333; /* Cambiado el color del fondo del campo de entrada */
        }

        .btn-primary {
            background-color: transparent;
            border: 2px solid #4db8ff;
            border-radius: 30px; /* Cambiado el radio de borde de 20px a 30px */
            padding: 15px 30px;
            font-weight: bold;
            color: #4db8ff;
            transition: color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            color: #1a8cff;
            border-color: #1a8cff;
            background-color: transparent; /* Agregado para mantener el fondo transparente */
        }

        .text-center h2, .text-center h3 {
            color: #ffffff;
        }

        .link {
            color: #4db8ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link:hover {
            color: #1a8cff;
        }

        .icon {
            position: absolute;
            top: 35px;
            left: 20px;
            color: #4db8ff;
        }

        .icon-right {
            position: absolute;
            top: 35px;
            right: 20px;
            color: #4db8ff;
            cursor: pointer;
            transition: color 0.3s;
        }

        .icon-right:hover {
            color: #1a8cff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container position-relative">
            <i class="fas fa-user icon"></i>
            <i class="fas fa-lock icon-right"></i>
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <form action="login_usuario_bd.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label"><i class="fas fa-user"></i> Usuario/Correo</label>
                    <input type="text" class="form-control pl-5" id="email"  placeholder="Usuario" name="email">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label"><i class="fas fa-lock"></i> Contraseña</label>
                    <input type="password" class="form-control pl-5" id="contrasena"  placeholder="Contraseña" name="contrasena">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Iniciar sesión <i class="fas fa-sign-in-alt"></i></button>
                </div>
                <h3 class="text-center mt-4">¿Aún no tienes una cuenta?</h3>
                <div class="d-grid">
                    <a id="boton_registro" class="btn btn-primary" href="/LOGIN_REGISTROBD/login_php/registro.php">Registrarse ahora <i class="fas fa-user-plus"></i></a>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="link">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-9ABe7xCakZu3IcTFgaFCyQsuiVW+Y8F9hH3gfCAm+04WpDybsfVE2g/d0aYK9qCBwmGcnlTuEoUgwbvE0g6rCg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hN"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

