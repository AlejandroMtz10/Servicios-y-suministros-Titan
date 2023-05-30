<?php 

if (isset($_POST['guardarEntrega'])) {
	include_once("../Config/conexion.php");

	$idRegistro = $_POST['idRegistroEnviar'];
	$empresa = $_POST['empresaEnviar'];
	$entregadaPor = $_POST['entregadaEnviar'];
	$estatus = $_POST['estatusEnviar'];

	$entregadaPor=trim($entregadaPor);
	$entregadaPor=filter_var($entregadaPor,FILTER_SANITIZE_STRING);



	$sql = "INSERT INTO entregas(idRegistro,empresa,entregadaPor,estatus) VALUES ('$idRegistro','$empresa','$entregadaPor','$estatus')";
	$QUERY = $conection->query($sql);

	if ($QUERY) {
		header("Location: ../usuarios/agenda.php");
	}else{
		$em = "Hay un error";
		header("Location: ../usuarios/agenda.php?error=$em");
	}
}

?>