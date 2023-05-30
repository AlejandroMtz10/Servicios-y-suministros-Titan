<?php
    
    error_reporting(1);
    include_once("../Config/conexion.php");

    $idMaterial = $_REQUEST['idEditar'];

    $imagen = addslashes(file_get_contents($_FILES['imagenMat']['tmp_name']));

    $sql = "UPDATE materialesCompra SET imagen = '$imagen' WHERE idMaterial = '$idMaterial'";

    $resultado = $conection -> query($sql);

    if($resultado){
        header('Location: ../usuarios/materialesRegistrados.php');
    }else{
        echo "No se pudo actualizar la imagen";
    }
?>