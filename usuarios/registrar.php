<?php 
    session_start();

    //Comprobamos que tennga sesión
    if(isset($_SESSION['usuario'])){
        header('Location: index.php');
        die();
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        include_once("../Config/conexion.php");
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $errores = '';

        //Comprueba que los campos no esten vacíos
        if(empty($usuario) or empty($password) or empty($password2) or empty($correo) or empty($nombre)){
            $errores = '<li> Favor de rellenar los datos correctamente</li>';
        }else{
            //Comprobar usuario existe

            $statement = $conection->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array('usuario'=>$usuario));
            $resultado = $statement->fetch();

            //Si el resultado es diferente significa que el usuario existe
            if($resultado != false){
                $errores.= '<li>El nombre del usuario ya existe</li>';
            }

            if($password != $password2){
                $errores.='<li>Las contraseñas no coinciden</li>';
            }
        }
        //Comprobamos si hay errores
        if($errores ==''){

            //Hasheo de contraseña
            $password=password_hash($password,PASSWORD_DEFAULT);
            $password2=password_hash($password2,PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO usuarios (usuario,nombre,correo,pass) VALUES ('$usuario','$nombre','$correo','$password')";
            $query = $conection->query($sql);
            header('Location: login.php');
        }
    }
require 'views/registrar.view.php';
?>