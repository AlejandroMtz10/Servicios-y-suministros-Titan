<?php 
		include_once("../Config/conexion.php");
		$modelo = $_POST['modeloArt'];
		$material = $_POST['materialArt'];
		$imagen = addslashes(file_get_contents($_FILES['imagenArt']['tmp_name']));
		$precio = $_POST['precioArt'];

		$modelo = filter_var($modelo, FILTER_SANITIZE_STRING);
		$material = filter_var($material, FILTER_SANITIZE_STRING);

		$sql = "INSERT INTO articulos(modelo,material,imagen,precio) VALUES ('$modelo','$material','$imagen','$precio')";
		$resultado = $conection -> query($sql);
		if($resultado){
			header('Location: ../usuarios/registrarProducto.php');
		}else{
			echo "Error: registro no guardado";
		}

 ?>