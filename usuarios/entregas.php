<?php 
	include_once("../Config/conexion.php");

	////Numero de pagina donde esta el usuario
	$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	/////Numero de post que se mostraran por pagina
	$postPorPagina=5;

	$inicio=($pagina>1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

	///Consulta SQL
	$entregas = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM entregas LIMIT $inicio, $postPorPagina");

	//Ejecutar consulta
	$entregas->execute();
	$entregas= $entregas->fetchAll();

	//Comprobar existencia de cotizaciones
	if(!$entregas){
		header('location:cotizaciones.php');
	}


	$totalEntrega=$conection->query('SELECT FOUND_ROWS() as total');
	$totalEntrega=$totalEntrega->fetch()['total'];

	//Numero de paginas
	$numeroPaginas= ceil($totalEntrega/$postPorPagina);

	require 'entregas.view.php';

	
 ?>