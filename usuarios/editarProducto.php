<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/materiales.css">
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
        color: #FFFFFF;
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
                <li><a href="../usuarios/menu.php" class="nav-link"><i class="bi bi-house"></i> Menú</a></li>
                <li><a class="nav-link" data-bs-toggle="dropdown">Registros</a>
                    <ul class="dropdown-menu">
                        <li><a href="../usuarios/registrarMaterial.php" class="dropdown-item">Material de compra</a>
                        </li>
                        <li><a href="../usuarios/registrarProducto.php" class="dropdown-item">Producto de venta</a></li>
                        <li><a href="../usuarios/agendar.php" class="dropdown-item">Agendar entrega</a></li>
                    </ul>
                </li>
                <li>
                    <button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon"
                            class="iconos bi bi-moon-fill"></i></button>
                </li>
            </ul>
        </nav>
    </div>
    <?php 
		include_once('../Config/conexion.php');
        $idArticulo=$_REQUEST['idProductoEdit'];
		$sql="SELECT * from articulos WHERE idArticulo = $idArticulo";
		$query=$conection->query($sql);
		$fila = $query->fetch();
	?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="hTitulo">Editar artículo</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p class="pMaterial">Puedes cambiar el nombre del modelo, su precio o su material de elaboración si es
                    necesario.</p>
            </div>
            <br>
        </div>
        <div class="row">
            <div class="col">
                <form action="../crudArticulos/actualizarProducto.php?idEditar=<?php echo $fila["idArticulo"]; ?>"
                    method="POST" enctype="multipart/form-data" class="row g-3 mt3">
                    <div class="col-12">
                        <label for="modeloInput" class="form-label lblMaterial">Modelo: * </label>
                        <input type="text" class="form-control inputArticulos" id="modeloInput"
                            placeholder="Modelo del artículo" name="modeloArt" value="<?php echo $fila['modelo']; ?>">
                    </div>

                    <div class="col-12">
                        <label for="materialInput" class="form-label lblMaterial">Material: * </label>
                        <input type="text" class="form-control inputArticulos" id="materialInput" placeholder="Material"
                            name="materialArt" value="<?php echo $fila['material']; ?>">
                    </div>
                    <div class="col-12">
                        <label for="precioInput" class="form-label lblMaterial">Precio: * </label>
                        <input type="number" min="0" class="form-control inputArticulos" id="precioInput"
                            placeholder="Precio del artículo" name="precioArt" value="<?php echo $fila['precio']; ?>">
                    </div>

                    <br>
                    <div class="mb-3 col-md-4">
                        <?php  if(isset($_GET['error'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php endif ?>
                    </div>
                    <img style="width: 400px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>"
                        alt="">
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="../usuarios/productosRegistrados.php" class="btn btn-outline-danger btnCancelar"><i
                                class="bi bi-x-circle"></i> Cancelar</a>
                        <input type="submit" class="btn btn-outline-success btnGuardar" value=" Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <div class="contacto col">
                <div class="row widgets justify-content-end">
                    <div class="col-12 col-md-4 col-lg-3">
                        <p>Ciudad Acuña, Coah.</p>
                        <p>Tel: (877) 773 16 17 y 773 16 20</p>
                        <p>tarimas_titan@yahoo.com.mx</p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3">
                        <p>Piedras Negras, Coah.</p>
                        <p>Tel: (877) 786 16 52 y 786 16 20</p>
                        <p>tarimas_titan@yahoo.com.mx</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>