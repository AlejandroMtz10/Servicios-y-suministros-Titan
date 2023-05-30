<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/registros.css">
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/colorTema.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<style type="text/css">
		.principal{
			background-image: url("../img/madera.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}

		footer{
			background-image: url("../img/madera.jpg");
			background-size: cover;
			background-repeat: no-repeat;
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
						<li><a href="../usuarios/registrarMaterial.php" class="dropdown-item">Material de compra</a></li>
						<li><a href="../usuarios/registrarProducto.php" class="dropdown-item">Producto de venta</a></li>
						<li><a href="../usuarios/agendar.php" class="dropdown-item">Agendar entrega</a></li>
					</ul>
				</li>
				<!--li><a href="../clientes/contacto.php" class="nav-link">Contacto</a></li-->
			    <li>
			    	<button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon" class="iconos bi bi-moon-fill"></i></button>
			    </li>	
			</ul>
		</nav>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="hRegistros">Agendar entrega.</h1>
				<p class="pRegistros">Agende la entrega de un pedido de una fabrica o compañia que haya solicitado una entrega.</p>
			</div>
			<br>


		<form action="../crudAgenda/insertAgenda.php" method="POST" enctype="multipart/form-data" class="row g-3 mt3">
			<div class="col-12">
				<label for="empresaInput" class="form-label pRegistros">Empresa: * </label>
				<input type="text" class="form-control inputAgenda" id="empresaInput" placeholder="Empresa" name="empresaAgenda" required>
			</div>

			<div class="col-12">
				<label for="cantidadInput" class="form-label pRegistros">Cantidad de tarimas: * </label>
				<input type="number" min="1" class="form-control inputArticulos" id="cantidadInput" placeholder="Cantidad de tarimas solicitadas" name="cantidadAgenda" required>
			</div>

			<div class="col-8">
				<label for="solicitanteInput" class="form-label pRegistros">Solicitante: * </label>
				<input type="text" class="form-control inputArticulos" id="solicitanteInput" placeholder="Nombre de la persona que solicito una entrega" name="solicitanteAgenda" required>
			</div>

			<div class="col-4">
				<label for="numeroInput" class="form-label pRegistros">Número: * </label>
				<input type="tel" class="form-control" id="numeroInput" placeholder="Número telefonico para contactarnos" name="numeroAgenda" pattern="[0-9]{3}-[0-9]+" required>
			</div>

			<div class="col-12">
				<label for="especificacionesInput" class="form-label pRegistros">Especificaciones: * </label>
				<textarea name="especificacionesAgenda" class="form-control" id="especificacionesInput" placeholder="Características de las terimas solicitadas." required></textarea>
			</div>

			<div class="col-6">
				<label for="fechaInput" class="form-label pRegistros">Fecha de entrega: * </label>
				<input type="date" class="form-control" id="fechaInput" placeholder="Fecha que solicitaron para entregar el paquete" name="fechaAgenda" required>
			</div>

			<div class="col-6">
				<label for="montoInput" class="form-label pRegistros">Monto total: * </label>
				<input type="number" class="form-control" id="montoInput" placeholder="Monto a pagar por el pedido" name="montoAgenda" required>
			</div>

			<div class="mb-3 col-md-4">
				<?php  if(isset($_GET['error'])) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
					</div>
				<?php endif ?>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../usuarios/agendar.php" class="btn btn-outline-danger btnCancelar"><i class="bi bi-x-circle"></i> Cancelar</a>
            	<input type="submit" name="guardarAgenda" value="Guardar" class="btn btn-outline-success btnGuardar">
            </div>
		</form>
	    </div>
    </div>                 
	<br>

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