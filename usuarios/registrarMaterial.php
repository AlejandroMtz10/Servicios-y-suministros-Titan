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
		.btnMateriales{
			font-weight: bold;
			font-size: 18px;
		}
		.btnMateriales:hover{
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
				<h1 class="hRegistros">Registrar material</h1>
				<p class="pRegistros">Registre los materiales que se compraran, llenar todos los campos.</p>
			</div>
			<br>


		<form action="../crudMateriales/insertMateriales.php" method="POST" enctype="multipart/form-data" class="row g-3 mt3">
			<div class="col-12">
				<label for="materialInput" class="form-label lblMaterial">Material: * </label>
				<input type="text" class="form-control inputArticulos" id="materialInput" placeholder="Material" name="materialMat">
			</div>
			<div class="col-12">
				<label for="precioInput" class="form-label lblMaterial">Precio: * </label>
				<input type="number" min="1" class="form-control inputArticulos" id="precioInput" placeholder="Precio de compra del material" name="precioMat">
			</div>
			<div class="col-8">
				<label for="imagenInput" class="form-label lblImagen">Imagen: * </label>
				<input type="file" class="form-control inputArticulos" id="imagenInput" placeholder="Imagen del artículo" name="imagenMat">
			</div>
			<div class="mb-3 col-md-4">
				<?php  if(isset($_GET['error'])) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
					</div>
				<?php endif ?>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../usuarios/registrarMaterial.php" class="btn btn-outline-danger btnCancelar"><i class="bi bi-x-circle"></i> Cancelar</a>
				<input type="submit" name="enviarImagen" value="Guardar" class="btn btn-outline-success btnGuardar">
				<a href="../usuarios/materialesRegistrados.php" class="btn btn-outline-warning btnMateriales">Materiales</a>                 
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