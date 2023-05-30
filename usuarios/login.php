<?php
    session_start();

    // Comprobamos si ya tiene sesión
    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        // Conexión a la base de datos
        include_once("../Config/conexion.php");

        $statement = $conection->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');

        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado !== false && password_verify($password, $resultado['pass'])) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        } else {
            $errores = '<li>Datos incorrectos</li>';
        }
    }

    require 'views/login.view.php';
?>
