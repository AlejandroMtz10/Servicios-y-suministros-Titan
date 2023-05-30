<?php 
	include_once("../Config/conexion.php");

	////Numero de pagina donde esta el usuario
	$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	/////Numero de post que se mostraran por pagina
	$postPorPagina=5;

	$inicio=($pagina>1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

	///Consulta SQL
	$agendados = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM agenda LIMIT $inicio, $postPorPagina");

	//Ejecutar consulta
	$agendados->execute();
	$agendados= $agendados->fetchAll();

	//Comprobar existencia de cotizaciones
	if(!$agendados){
		header('location:cotizaciones.php');
	}


	$totalAgenda=$conection->query('SELECT FOUND_ROWS() as total');
	$totalAgenda=$totalAgenda->fetch()['total'];

	//Numero de paginas
	$numeroPaginas= ceil($totalAgenda/$postPorPagina);

	require 'agenda.view.php';

	
 ?>