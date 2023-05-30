<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style_cotizaciones.css">
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
		.btnEliminar{
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
				<li><a href="../usuarios/menu.php" class="nav-link"><i class="bi bi-house"></i> Menú</a></li>
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
	
	<div class="contenedor">
		<h1 class="display-4">Contactos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($contactos as $contacto):?>	
					<div class="card">
		  				<div class="card-header h4">
		    				<?php echo 'Folio de registro: '.$contacto['idRegistro']; ?>
		  				</div>
		  				<div class="card-body">
		    				<h5 class="card-title"><?php echo 'Nombre: '.$contacto['nombre']; ?></h5>
		    				<h5 class="card-title"><?php echo 'Empresa: '.$contacto['empresa']; ?></h5>
		    				<p class="card-text"><?php echo 'Fecha: '.$contacto['fecha']; ?></p>
		    				<p class="card-text"><?php echo 'Número telefonico: '.$contacto['numeroTelefono']; ?></p>
		    				<p class="card-text"><?php echo 'Correo electronico: '.$contacto['email']; ?></p>
		    				<p class="card-text"><?php echo 'Cantidad de tarimas: '.$contacto['asunto']; ?></p>
		    				<p class="card-text"><?php echo 'Caracteristicas: '.$contacto['mensaje']; ?></p>
		    				<a href="../crudContacto/eliminarContacto.php?id=<?php echo $contacto["idRegistro"] ?>" class="btn btn-outline-danger btnEliminar"><i class="bi bi-trash"></i> Eliminar</a>
		  				</div>
					</div>
					<br>
				<?php endforeach; ?>	
			</ul>
		</section>

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