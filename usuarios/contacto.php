<?php 
	include_once("../Config/conexion.php");

	////Numero de pagina donde esta el usuario
	$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	/////Numero de post que se mostraran por pagina
	$postPorPagina=5;

	$inicio=($pagina>1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

	///Consulta SQL
	$contactos = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM contacto LIMIT $inicio, $postPorPagina");

	//Ejecutar consulta
	$contactos->execute();
	$contactos= $contactos->fetchAll();

	//Comprobar existencia de contactos
	if(!$contactos){
		header('location:contacto.php');
	}

	$totalContactos=$conection->query('SELECT FOUND_ROWS() as total');
	$totalContactos=$totalContactos->fetch()['total'];

	//Numero de paginas
	$numeroPaginas= ceil($totalContactos/$postPorPagina);

	require 'contacto.view.php';

	
 ?>