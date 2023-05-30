<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM entregas WHERE idEntrega = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/entregas.php");
	}else{
		echo "No se elimino el registro de la entrega";
	}

 ?>