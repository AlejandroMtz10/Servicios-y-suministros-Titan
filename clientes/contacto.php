<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/contactoStyle.css">
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
			<h2 class="hContacto">Contactanos.</h2>
			<br>
		</div>
		<form action="../crudContacto/insertContacto.php" method="POST" enctype="multipart/form-data" class="row g-3 mt3">
			<div class="col-6">
				<label for="nombreInput" class="form-label lblContacto">Nombre: * </label>
				<input type="text" class="form-control inputContacto" id="nombreInput" placeholder="Nombre con quien nos contactaremos" name="nombreCont">
			</div>

			<div class="col-6">
				<label for="empresaInput" class="form-label lblContacto">Empresa: </label>
				<input type="text" class="form-control inputContacto" id="empresaInputInput" placeholder="Empresa" name="empresaCont">
			</div>

			<div class="col-4">
				<label for="numeroInput" class="form-label lblContacto">Número: * </label>
				<input type="tel" class="form-control inputContacto" id="numeroInput" placeholder="Número telefonico para contactarnos" name="numeroCont" pattern="[0-9]{3}-[0-9]+" required>
			</div>

			<div class="col-8">
				<label for="emailInput" class="form-label lblContacto">Email: * </label>
				<input type="email" class="form-control inputContacto" id="emailInput" placeholder="Correo electronico" name="emailCont">
			</div>

			<div class="col-12">
				<label for="asuntoInput" class="form-label lblContacto">Asunto: * </label>
				<input type="text" class="form-control inputContacto" id="asuntoInput" placeholder="Asunto" name="asuntoCont">
			</div>

			<div class="col-12">
				<label for="mensajeInput" class="form-label lblContacto">Mensaje: * </label>
				<input type="text" class="form-control inputContacto" id="mensajeInput" placeholder="Describa la situación con nuestros servicios" name="mensajeCont">
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
                 <input type="submit" name="enviarFormulario" value="Guardar" class="btn btn-outline-success btnContacto">
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