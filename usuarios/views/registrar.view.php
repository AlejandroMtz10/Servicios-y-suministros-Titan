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

                <div class="card text-bg-success mb-3 align-items-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h1>Nuevo usuario.</h1>
                            </div>
                        </div>
                    </div>

                    <form class="form-control" name="login"
                        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="row">
                        <div class="form-group col-6">
                            <label for="usuarioInput" class="labelUsuarios">Usuario</label>
                            <br>
                            <input class="form-control inputUsuarios" type="text" name="usuario" placeholder="Usuario">
                        </div>

                        <div class="form-group col-6">
                            <label for="nombreInput" class="labelUsuarios">Nombre</label>
                            <br>
                            <input class="form-control inputUsuarios" type="text" name="nombre" placeholder="Nombre completo">
                        </div>

                        <div class="form-group col-12">
                            <label for="correoInput" class="labelUsuarios">Correo electronico</label>
                            <br>
                            <input class="form-control inputUsuarios" type="email" name="correo" placeholder="Correo electronico">
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="passwordInput" class="labelUsuarios">Contraseña</label>
                            <br>
                            <input class="form-control inputUsuarios" type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group col-6">
                            <label for="password2Input" class="labelUsuarios">Confirmar contraseña</label>
                            <br>
                            <input class="form-control inputUsuarios" type="password" name="password2"
                                placeholder="Confirma la contraseña">
                        </div>

                        <!--Comprobar si la variable error esta seteada-->
                        <?php  if(!empty($errores)): ?>
                        <div class="error">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        </div>
                        <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="login.php" class="btn btn-outline-warning opciones"><i class="bi bi-box-arrow-in-right"></i>
                                Iniciar sesion</a>
                            <button type="submit" class="btn btn-outline-success opciones"><i class="bi bi-save"></i> Guardar</button>
                        </div>
                    </form>
                </div>
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