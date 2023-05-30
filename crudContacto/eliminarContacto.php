<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM contacto WHERE idRegistro = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/contacto.php");
	}else{
		echo "No se elimino el registro del contacto";
	}

 ?>