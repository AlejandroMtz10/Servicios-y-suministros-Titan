<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM agenda WHERE idRegistro = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/agenda.php");
	}else{
		echo "No se elimino el registro agendado";
	}

 ?>