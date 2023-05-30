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
				<li><a href="../usuarios/cerrarSesion.php" class="nav-link"><i class="bi bi-box-arrow-left"></i> Cerrar sesión</a></li>
				<li><a class="nav-link" data-bs-toggle="dropdown">Registros</a>
					<ul class="dropdown-menu">
						<li><a href="../usuarios/registrarMaterial.php" class="dropdown-item">Material de compra</a></li>
						<li><a href="../usuarios/registrarProducto.php" class="dropdown-item">Producto de venta</a></li>
						<li><a href="../usuarios/agendar.php" class="dropdown-item">Agendar entrega</a></li>
					</ul>
				</li>
				<li>
					<button onclick="cambiarTema()" class="btn rounded-fill"><i id="dl-icon" class="iconos bi bi-moon-fill"></i></button>
				</li>	
			</ul>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="hRegistros">Menú principal</h1>
				<h3 class="hRegistros" style="text-transform: capitalize;">Usuario activo: <u><?php echo $_SESSION['usuario']; ?></u></h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
						<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/reciclaje.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Registrar material.</h5>
								<p class="card-text">Aquí podras realizar los registros de los materiales que se compran en Servicios y Suministros Titan.</p>
								<a href="../usuarios/registrarMaterial.php" class="btn btn-outline-success btnGuardar">Registrar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/reciclaje.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Registros de materiales.</h5>
								<p class="card-text">Aquí podras encontrar todos los registros de los materiales que se compran en Servicios y Suministros Titan.</p>
								<a href="../usuarios/materialesRegistrados.php" class="btn btn-outline-success btnGuardar">Registros</a>
							</div>
						</div>
					</div>
				</div>
			</div>
						<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/tarima.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Registrar productos.</h5>
								<p class="card-text">Aquí podras realizar los registros de los productos que se venden en Servicios y Suministros Titan.</p>
								<a href="../usuarios/registrarProducto.php" class="btn btn-outline-success btnGuardar">Registrar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/tarima.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Registros de productos.</h5>
								<p class="card-text">Aquí podras encontrar todos los registros de los productos que se venden en Servicios y Suministros Titan.</p>
								<a href="../usuarios/productosRegistrados.php" class="btn btn-outline-success btnGuardar">Registros</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/agendar.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Agendar entrega.</h5>
								<p class="card-text">Agendar la entrega de tarimas que se venden hacía las empresas que solicitaron un pedido.</p>
								<a href="../usuarios/agendar.php" class="btn btn-outline-success btnGuardar">Agendar</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/agenda.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Agenda.</h5>
								<p class="card-text">Puedes revisar la agenda, eliminar futuras entregas si son canceladas o buscar un registro agendado.</p>
								<a href="../usuarios/agenda.php" class="btn btn-outline-success btnGuardar">Agenda</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/entregas.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Registros de entregas.</h5>
								<p class="card-text">Puedes revisar los registros de entregas que se han hecho o eliminarlos.</p>
								<a href="../usuarios/entregas.php" class="btn btn-outline-success btnGuardar">Entregas</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/presupuesto.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Cotizaciones.</h5>
								<p class="card-text">Puedes revisar los registros de cotizaciones que se han hecho y puedes eliminarlas.</p>
								<a href="../usuarios/cotizaciones.php" class="btn btn-outline-success btnGuardar">Cotizaciones</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="../img/contacto.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Contacto.</h5>
								<p class="card-text">Revisa los registros de contactos que se han hecho por parte de fabricas y puedes eliminarlas.</p>
								<a href="../usuarios/contacto.php" class="btn btn-outline-success btnGuardar">Contactos</a>
							</div>
						</div>
					</div>
				</div>
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