<!doctype html>
<html lang="en">
<head>
    <title>Registro de Usuario</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



<!-- LOS ESTILOS DE CSS TUVE QUE COLOCARLOS ACA, DEBIDO A QUE AL HACERLO CON CSS, EL SERVIDOR DE XAMPP NO MUSTRA LOS CAMBIOS DE CSS EN EL NAVEGADOR   -->




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

        /* Estilo para el botón Volver al inicio */
        .btn-back {
            background-color: transparent;
            border: 2px solid #4db8ff;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
            color: #4db8ff;
            transition: color 0.3s, border-color 0.3s;
        }

        .btn-back:hover {
            color: #1a8cff;
            border-color: #1a8cff;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container position-relative">
            <i class="fas fa-user icon"></i>
            <i class="fas fa-lock icon-right"></i>
            <h2 class="text-center mb-4">Registro de Usuario</h2>
            <form action="registro_usuarios_bd.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label"><i class="fas fa-user"></i> Nombre de usuario:</label>
                    <input type="text" class="form-control pl-5" id="username" name="username" aria-describedby="helpId" placeholder="Nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label"><i class="fas fa-user"></i> Apellido</label>
                    <input type="text" class="form-control pl-5" id="lastname" name="lastname" aria-describedby="helpId" placeholder="Apellido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><i class="fas fa-envelope"></i> Correo</label>
                    <input type="text" class="form-control pl-5" id="email" name="email" aria-describedby="helpId" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label"><i class="fas fa-lock"></i> Contraseña</label>
                    <input type="Password" class="form-control pl-5" id="contrasena" name="contrasena" aria-describedby="helpId" placeholder="Contraseña">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Registrarse <i class="fas fa-user-plus"></i></button>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-back">Volver al inicio</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html
