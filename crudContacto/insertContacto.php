<?php 

if (isset($_POST['enviarFormulario'])) {
	include_once("../Config/conexion.php");


	$nombre = $_POST['nombreCont'];
	$empresa = $_POST['empresaCont'];
	$numero = $_POST['numeroCont'];
	$email = $_POST['emailCont'];
	$asunto = $_POST['asuntoCont'];
	$mensaje = $_POST['mensajeCont'];

	$sql = "INSERT INTO contacto(nombre,empresa,fecha,numeroTelefono,email,asunto,mensaje) VALUES ('$nombre','$empresa',CURRENT_TIMESTAMP(),'$numero','$email','$asunto','$mensaje')";
	$QUERY = $conection->query($sql);

	if ($QUERY) {
		header("Location: ../clientes/contacto.php");
	}else{
		$em = "Hay un error";
		header("Location: ../clientes/contacto.php?error=$em");
	}
}

?>