<?php 
		include_once("../Config/conexion.php");
		$tipo = $_POST['materialMat'];
		$imagen = addslashes(file_get_contents($_FILES['imagenMat']['tmp_name']));
		$precio = $_POST['precioMat'];

		$tipo = filter_var($tipo, FILTER_SANITIZE_STRING);

		$sql = "INSERT INTO materialesCompra(tipo,precio,imagen) VALUES ('$tipo','$precio','$imagen')";
		$resultado = $conection -> query($sql);
		if($resultado){
			header('Location: ../usuarios/registrarMaterial.php');
		}else{
			echo "Error: registro no guardado";
		}

 ?>