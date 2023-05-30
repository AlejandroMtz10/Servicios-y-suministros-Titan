<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registros.css">
    <link rel="stylesheet" href="../css/style_cotizaciones.css">
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
                <!--li><a href="../clientes/contacto.php" class="nav-link">Contacto</a></li-->
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
                <h1 class="hRegistros">Agenda.</h1>
                <p class="pRegistros">Registros de agenda.</p>
            </div>
        </div>
        <br>
                <section class="articulos">
                    <ul>
                        <?php foreach ($agendados as $agenda):?>
                        <div class="card">
                            <div class="card-header h4">
                                <?php echo 'Folio de registro: '.$agenda['idRegistro']; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo 'Empresa: '.$agenda['empresa']; ?></h5>
                                <p class="card-text"><?php echo 'Cantidad de tarimas: '.$agenda['cantidadTar']; ?></p>
                                <p class="card-text"><?php echo 'Solicitante: '.$agenda['solicitante']; ?></p>
                                <p class="card-text"><?php echo 'Teléfono: '.$agenda['telefono']; ?></p>
                                <p class="card-text"><?php echo 'Especificaciones: '.$agenda['especificaciones']; ?></p>
                                <p class="card-text"><?php echo 'Fecha de entrega: '.$agenda['fechaEntrega']; ?></p>
                                <p class="card-text"><?php echo 'Monto total: '.$agenda['montoTotal']; ?></p>
                                <a href="../crudAgenda/eliminarAgenda.php?id=<?php echo $agenda["idRegistro"] ?>"
                                    class="btn btn-outline-danger btnCancelar"><i class="bi bi-trash"></i> Eliminar</a>
                                <button class="btn btn-success opciones" data-bs-toggle="modal"
                                    data-bs-target="#modal-entregar<?php echo $agenda['idRegistro']; ?>"><i
                                        class="bi bi-send-plus"></i>
                                    Entregar</button>
                            </div>
                        </div>
		<br>
        <div class="modal fade" id="modal-entregar<?php echo $agenda['idRegistro']; ?>" tabindex="-1" aria-hidden="true"
            aria-labelledby="label-modal" data-bs-backdrop="static" aria-hidden="true">
            <!-- caja de dialogo -->
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <!-- contenido -->
                <div class="modal-content">
                    <!-- encabezado -->
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="bi bi-send-fill"></i> Entregar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- cuerpo de la caja -->
                    <div class="modal-body">
                        <h6>Registra la entrega.</h6>
                        <br>
                        <form action="../crudEntregas/insertEntrega.php"
                            method="POST" enctype="multipart/form-data" class="row g-3 mt3">
                            <div class="col">
                                <div class="col-12">
                                    <label for="modeloInput" class="form-label lblMaterial">Folio de registro: *
                                    </label>
                                    <input type="number" class="form-control inputArticulos" id="idRegistroEnviar"
                                        placeholder="Folio de registro" name="idRegistroEnviar"
                                        value="<?php echo $agenda['idRegistro']; ?>" readonly>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="modeloInput" class="form-label lblMaterial">Empresa: * </label>
                                    <input type="text" class="form-control inputArticulos" id="empresaEnviar"
                                        placeholder="Empresa que se le entrego" name="empresaEnviar"
                                        value="<?php echo $agenda['empresa']; ?>" readonly>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="modeloInput" class="form-label lblMaterial">Entregada por: * </label>
                                    <input type="text" class="form-control inputArticulos" id="entrgadaEnviar"
                                        placeholder="Nombre de la persona que entrego el envío" name="entregadaEnviar"
                                        required>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="modeloInput" class="form-label lblMaterial">Estatus: * </label>
                                    <select class="form-select form-select-lg mb-3" name="estatusEnviar" id="estatusEnviar">
                                        <option value="Entregada">Entregada</option>
                                        <option value="Cancelada">Cancelada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4">
                                <?php  if(isset($_GET['error'])) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                                <?php endif ?>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger opciones" data-bs-dismiss="modal" type="button"><i
                                        class="bi bi-x-circle"></i> Cancelar</button>
                                <input type="submit" class="btn btn-success opciones" name="guardarEntrega" value=" Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
		</ul>
    </section>
</div>
    <div class="container">
        <nav justify-content-center>
            <section class="paginacion">
                <ul>
                    <?php if($pagina==1):  ?>
                    <li class="disabled">&laquo;</li>
                    <?php else:  ?>
                    <li><a href="?pagina= <?php echo $pagina -1 ?>">&laquo;</a></li>
                    <?php endif; ?>

                    <!--Mostrarmos paginas-->
                    <?php 

					for($i=1;$i<=$numeroPaginas;$i++){
							if ($pagina==$i) {
								echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
							}else{
								echo "<li><a href='?pagina= $i'>$i</a></li>";
							}
						}
					?>

                    <!--desactivamos en la ultima pagina-->
                    <?php if($pagina==$numeroPaginas):  ?>
                    <li class="disabled">&raquo;</li>
                    <?php else:  ?>
                    <li><a href="?pagina= <?php echo $pagina +1 ?>">&raquo;</a></li>
                    <?php endif; ?>

                </ul>
            </section>
        </nav>
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