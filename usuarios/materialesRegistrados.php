<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registrosProductos.css">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="hCompras">Materiales en compra.</h1>
                <br>
                <a href="../usuarios/registrarMaterial.php" class="btn btn-outline-success registro"><i
                        class="bi bi-plus-square"></i> Nuevo material</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
                <table class="table  table-hover table-responsive">
                    <thead>
                        <tr>
                            <td class="tdCabecera h5">Número</td>
                            <td class="tdCabecera h5">Material</td>
                            <td class="tdCabecera h5">Imagen</td>
                            <td class="tdCabecera h5">Precio por kilo</td>
                            <td class="tdCabecera h5">Opciones</td>
                        </tr>
                    </thead>


                    <?php 
					include_once('../Config/conexion.php');

					$sql="SELECT * from materialesCompra";
					$query=$conection->query($sql);
					foreach ($query as $fila) {
					?>

                    <tr>
                        <td class="registro"><?php echo $fila['idMaterial']; ?></td>
                        <td class="registro"><?php echo $fila['tipo']; ?></td>
                        <td><img style="width: 400px;"
                                src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>" alt=""></td>
                        <td class="registro"><?php echo '$ '.$fila['precio']; ?></td>
                        <td>
                            <button class="btn btn-secondary opciones" data-bs-toggle="modal"
                                data-bs-target="#modal-foto<?php echo $fila['idMaterial']; ?>"><i class="bi bi-images"></i>
                                Nueva imagen</button>
                            <a href="../usuarios/editarMaterial.php?idMatEdit=<?php echo $fila['idMaterial']; ?>"
                                class="btn btn-warning opciones"><i class="bi bi-pencil-square"></i> Editar</a>
                            <a href="../crudMateriales/eliminarMateriales.php?id=<?php echo $fila["idMaterial"]; ?>"
                                class="btn btn-danger opciones"><i class="bi bi-trash3"></i> Eliminar</a>
                        </td>
                    </tr>

                    <div class="modal fade" id="modal-foto<?php echo $fila['idMaterial']; ?>" tabindex="-1"
                        aria-hidden="true" aria-labelledby="label-modal" data-bs-backdrop="static" aria-hidden="true">
                        <!-- caja de dialogo -->
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <!-- contenido -->
                            <div class="modal-content">
                                <!-- encabezado -->
                                <div class="modal-header">
                                    <h5 class="modal-title">Nueva imagen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- cuerpo de la caja -->
                                <div class="modal-body">
                                    <h6>Selecciona una nueva imagen</h6>
									<br>
                                    <form action="../crudMateriales/nuevaImagenMaterial.php?idEditar=<?php echo $fila["idMaterial"]; ?>" method="POST"
                                        enctype="multipart/form-data" class="row g-3 mt3">
                                        <div class="col">
                                            <img style="width: 300px;"
                                                src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>"
                                                alt="">
                                            <br>
											<br>
                                            <label for="imagenInput" class="form-label lblImagen">Imagen: * </label>
											<br>
                                            <input type="file" class="form-control inputArticulos" id="imagenInput"
                                                placeholder="Imagen del artículo" name="imagenMat" required>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <?php  if(isset($_GET['error'])) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $_GET['error']; ?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger opciones" data-bs-dismiss="modal"
                                                type="button"><i class="bi bi-x-circle"></i> Cancelar</button>
                                            <input type="submit" class="btn btn-success opciones" value=" Guardar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <?php 
				}
			?>

            </table>
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