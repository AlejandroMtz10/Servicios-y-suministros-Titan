<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM cotizaciones WHERE idCotizacion = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/cotizaciones.php");
	}else{
		echo "No se elimino el registro de la cotización.";
	}

 ?>