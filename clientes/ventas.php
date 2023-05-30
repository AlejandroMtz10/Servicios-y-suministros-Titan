<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/comprasStyle.css">
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
		<div class="row">
			<div class="col">
				<h1 class="hCompras">Materiales que compramos.</h1>
				<br>
				<p class="pCompras">En Servicios y Suministros Titan compramos los siguientes materiales con el siguiente precio que aparece en la tabla.</p>
				<br>

				<table class="table  table-hover table-responsive">
					<thead>
						<tr>
							<td class="tdCabecera h5">Número</td>
							<td class="tdCabecera h5">Material</td>
							<td class="tdCabecera h5">Precio por kilo</td>
							<td class="tdCabecera h5">Imagen</td>
						</tr>
					</thead>
					

					<?php 
					include_once('../Config/conexion.php');

					$sql="SELECT * from materialesCompra";
					$query=$conection->query($sql);
					foreach ($query as $fila) {
					 ?>

					<tr>
						<td class="registro h6"><?php echo $fila['idMaterial'] ?></td>
						<td class="registro h6"><?php echo $fila['tipo'] ?></td>
						<td class="registro h6"><?php echo '$ '.$fila['precio'] ?></td>
						<td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']) ?>" alt=""></td>
					</tr>

					
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