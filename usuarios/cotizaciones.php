<?php 
	include_once("../Config/conexion.php");

	////Numero de pagina donde esta el usuario
	$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	/////Numero de post que se mostraran por pagina
	$postPorPagina=5;

	$inicio=($pagina>1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

	///Consulta SQL
	$cotizaciones = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM cotizaciones LIMIT $inicio, $postPorPagina");

	//Ejecutar consulta
	$cotizaciones->execute();
	$cotizaciones= $cotizaciones->fetchAll();

	//Comprobar existencia de cotizaciones
	if(!$cotizaciones){
		header('location:cotizaciones.php');
	}


	$totalCotizaciones=$conection->query('SELECT FOUND_ROWS() as total');
	$totalCotizaciones=$totalCotizaciones->fetch()['total'];

	//Numero de paginas
	$numeroPaginas= ceil($totalCotizaciones/$postPorPagina);

	require 'cotizaciones.view.php';

	
 ?>