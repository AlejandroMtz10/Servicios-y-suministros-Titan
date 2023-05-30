<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/cotizar.css">
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/colorTema.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<style type="text/css">
		.principal{
			background-image: url("../img/madera.jpg");
			background-size: cover;

		}

		footer{
			background-image: url("../img/madera.jpg");
			background-size: cover;

		}

	</style>
	<title>Servicios y  Suministros Titan</title>
</head>
<body data-bs-theme="light">
	<div class="principal container-fluid">
			<header class="row-1">
				<div class="col">
					<img src="../img/logoServiciosTitan.png" alt="">
				</div>
			</header>	
			<nav class="row-1">
				<ul class="nav justify-content-end">
					<li><a href="../clientes/index.html" class="nav-link"><i class="bi bi-house"></i> Inicio</a></li>
					<li><a href="../clientes/nosotros.html" class="nav-link">Nosotros</a></li>
					<li><a class="nav-link" data-bs-toggle="dropdown">Compra y venta</a>
						<ul class="dropdown-menu">
							<li><a href="../clientes/compras.php" class="dropdown-item">Comprar</a></li>
							<li><a href="../clientes/ventas.php" class="dropdown-item">Vender</a></li>
						</ul>
					</li>
					<li><a href="../clientes/contacto.php" class="nav-link">Contacto</a></li>
				    <li>
				    	<button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon" class="iconos bi bi-moon-fill"></i></button>
				    </li>	
				</ul>
			</nav>
	</div>

	<div class="container">
		<div class="col">
			<h2 class="hCotizar">Realiza tu cotización.</h2>
			<br>
			<p class="pCotizar">Puedes realizar tu cotización si deseas realizar una compra por mayoreo con las especificaciones que nos pidas, nosotros nos pondremos en contacto contigo.</p>
			<br>
		</div>

		<form action="../crudCotizaciones/insertCotizacion.php" method="POST" enctype="multipart/form/data" class="row g-3 mt3">

			<div class="col-12">
				<label for="nombreInput" class="form-label lblCotizar">Nombre: * </label>
				<input type="text" class="form-control inputCotizar" id="nombreInput" placeholder="Nombre con quien nos contactaremos, nombre completo" name="nombreCot">
			</div>

			<div class="col-6">
				<label for="empresaInput" class="form-label lblCotizar">Empresa: * </label>
				<input type="text" class="form-control inputCotizar" id="empresatInput" placeholder="Empresa" name="empresaCot">
			</div>


			<div class="col-6">
				<label for="numeroInput" class="form-label lblCotizar">Número: * </label>
				<input type="tel" class="form-control inputCotizar" id="numeroInput" placeholder="Número telefonico con el que nos contactaremos" name="numeroCot"  pattern="[0-9]{3}-[0-9]+" required>
			</div>
			
			<div class="col-8">
				<label for="emailInput" class="form-label lblCotizar">Email: * </label>
				<input type="email" class="form-control inputCotizar" id="emailInput" placeholder="Correo electronico" name="emailCot">
			</div>

			<div class="col-4">
				<label for="cantidadInput" class="form-label lblCotizar">Cantidad de tarimas: * </label>
				<input type="number" min="0" class="form-control inputCotizar" id="cantidadInput" placeholder="Número de terimas que necesita" name="cantidadCot">
			</div>

			<div class="col-12">
				<label for="caracteristicasInput" class="form-label lblCotizar">Caracteristicas: * </label>
				<input type="text" class="form-control inputCotizar" id="caracteristicasInput" placeholder="Caracteristicas solicitadas" name="caracteristicasCot">
			</div>

			<div class="mb-3 col-md-4">
				<?php  if(isset($_GET['error'])) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
					</div>
				<?php endif ?>
			</div>

			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-danger btnCancelar" data-bs-dismiss="modal" type="button">Cancelar</button>
                 <input type="submit" name="enviarFormulario" value="Guardar" class="btn btn-outline-success btnCotizar">
            </div>
		</form>

	</div>

	<footer class="container-fluid">
			<div class="row-1">
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