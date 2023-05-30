<?php 
	include_once("../Config/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM articulos WHERE idArticulo = $id";

	$resultado = $conection -> query($sql);

	if($resultado){
		header("Location: ../usuarios/productosRegistrados.php");
	}else{
		echo "No se elimino el registro del articulo";
	}

 ?>