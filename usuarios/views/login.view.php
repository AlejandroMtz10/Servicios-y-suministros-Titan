<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/usuarios.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/colorTema.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/eae37eb21a.js"></script>
    <style type="text/css">
    .principal {
        background-image: url("../img/madera.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    footer {
        background-image: url("../img/madera.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .opciones {
        font-weight: bold;
    }
    </style>
    <title>Servicios y suministros Titan</title>
</head>

<body data-bs-theme="light">
    <div class="principal container-fluid">
        <header class="row">
            <div class="col">
                <img src="../img/logoServiciosTitan.png" alt="">
            </div>
        </header>
        <nav class="row">
            <ul class="nav justify-content-end">
                <li>
                    <button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon"
                            class="iconos bi bi-moon-fill"></i></button>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="hUsuarios">Iniciar sesion</h1>
                <hr>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
                <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                    method="POST">
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <label for="usuarioInput" class="labelUsuarios">Usuario</label>
                            <br><br>
                            <input class="form-control inputUsuarios" type="text" name="usuario" placeholder="Usuario">
                        </div>
                    </div>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="form-group col-8">
                            <label for="passwordInput" class="labelUsuarios">Contraseña</label>
                            <br><br>
                            <input class="form-control inputUsuarios" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <br>
                    <!--Comprobar si la variable error esta seteada-->
                    <div class="row justify-content-center">
                        <?php  if(!empty($errores)): ?>
                        <div class="error alert alert-danger col-6" role="alert">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <br><br><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="registrar.php" class="btn btn-outline-warning opciones"><i class="bi bi-box-arrow-in-right"></i>
                                Registrarse</a>
                            <button type="submit" class="btn btn-outline-success opciones"><i class="bi bi-box-arrow-in-right"></i> Iniciar sesión</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <div class="contacto col">
                <div class="row widgets justify-content-end">
                    <div class="col-12 col-md-4 col-lg-4">
                        <br><br><br>
                        <h1>Tarimas y servicios Titan.</h1>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>