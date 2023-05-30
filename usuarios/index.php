<?php 
    session_start();
 
    //Comprobamos que tennga sesión
    if(isset($_SESSION['usuario'])){
        header('Location: ../usuarios/menu.php');
        die();
    }else{
        //Enviamos al usuario al formulario de registro
        header('Location: ../usuarios/registrar.php');
    }
?>