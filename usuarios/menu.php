<?php 
    session_start();

    //Comprobamos que tennga sesión
    if(isset($_SESSION['usuario'])){
        require 'menu.view.php';
        die();
    }else{
        //Enviamos al usuario al login
        header('Location: login.php');
    }
?>