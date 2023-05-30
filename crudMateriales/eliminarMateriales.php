<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM materialesCompra WHERE idMaterial = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/materialesRegistrados.php");
	}else{
		echo "No se elimino el registro del articulo";
	}

 ?>