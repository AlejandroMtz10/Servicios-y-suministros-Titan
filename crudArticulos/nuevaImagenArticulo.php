<?php
    
    error_reporting(1);
    include_once("../Config/conexion.php");

    $idArticulo = $_REQUEST['idEditar'];

    $imagen = addslashes(file_get_contents($_FILES['imagenMat']['tmp_name']));

    $sql = "UPDATE articulos SET imagen = '$imagen' WHERE idArticulo = '$idArticulo'";

    $resultado = $conection -> query($sql);

    if($resultado){
        header('Location: ../usuarios/productosRegistrados.php');
    }else{
        echo "No se pudo actualizar la imagen";
    }
?>