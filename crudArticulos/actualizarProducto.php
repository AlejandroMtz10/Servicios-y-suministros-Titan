<?php
    error_reporting(1);
    include_once("../Config/conexion.php");

    $idArticulo = $_REQUEST['idEditar'];
    $modelo = $_POST['modeloArt'];
    $material = $_POST['materialArt'];
    $precio = $_POST['precioArt'];

    $sql = "UPDATE articulos SET modelo = '$modelo',material = '$material', precio = '$precio' WHERE idArticulo = '$idArticulo'";

    $resultado = $conection -> query($sql);

    if($resultado){
        header('Location: ../usuarios/productosRegistrados.php');
    }else{
        echo "No se pudo actualizar el producto.";
    }
?>