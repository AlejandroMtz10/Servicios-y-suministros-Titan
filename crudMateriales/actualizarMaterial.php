<?php
    error_reporting(1);
    include_once("../Config/conexion.php");

    $idMaterial = $_REQUEST['idEditar'];
    $tipo = $_POST['materialMat'];
    $precio = $_POST['precioMat'];

    $sql = "UPDATE materialesCompra SET tipo = '$tipo', precio = '$precio' WHERE idMaterial = '$idMaterial'";

    $resultado = $conection -> query($sql);

    if($resultado){
        header('Location: ../usuarios/materialesRegistrados.php');
    }else{
        echo "No se edito el material";
    }
?>