<?php 

	if (isset($_POST['enviarFormulario'])) {
	include_once("../Config/conexion.php");


	$nombre = $_POST['nombreCot'];
	$empresa = $_POST['empresaCot'];
	$numero = $_POST['numeroCot'];
	$email = $_POST['emailCot'];
	$cantidad = $_POST['cantidadCot'];
	$caract = $_POST['caracteristicasCot'];

	$sql = "INSERT INTO cotizaciones(nombre,empresa,fecha,numeroTelefonico,email,cantidadTar,caracteristicas) VALUES ('$nombre','$empresa',CURRENT_TIMESTAMP(),'$numero','$email','$cantidad','$caract')";
	$QUERY = $conection->query($sql);

		if ($QUERY) {
			header("Location: ../clientes/cotizar.php");
		}else{
			$em = "Hay un error";
			header("Location: ../clientes/cotizar.php?error=$em");
		}
	}

?>