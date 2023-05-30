<?php 

if (isset($_POST['guardarAgenda'])) {
	include_once("../Config/conexion.php");

	$empresa = $_POST['empresaAgenda'];
	$cantidad = $_POST['cantidadAgenda'];
	$solicitante = $_POST['solicitanteAgenda'];
	$numero = $_POST['numeroAgenda'];
	$especificaciones = $_POST['especificacionesAgenda'];
	$fecha = $_POST['fechaAgenda'];
	$monto = $_POST['montoAgenda'];

	$empresa=trim($empresa);
	$empresa=filter_var($empresa,FILTER_SANITIZE_STRING);

	$solicitante = trim($solicitante);
	$solicitante = filter_var($solicitante,FILTER_SANITIZE_STRING);

	$especificaciones=trim($especificaciones);
	$especificaciones = filter_var($especificaciones,FILTER_SANITIZE_STRING);


	$sql = "INSERT INTO agenda(empresa,cantidadTar,solicitante,telefono,especificaciones,fechaEntrega,montoTotal) VALUES ('$empresa','$cantidad','$solicitante','$numero','$especificaciones','$fecha','$monto')";
	$QUERY = $conection->query($sql);

	if ($QUERY) {
		header("Location: ../usuarios/agendar.php");
	}else{
		$em = "Hay un error";
		header("Location: ../usuarios/agendar.php?error=$em");
	}
}

?>