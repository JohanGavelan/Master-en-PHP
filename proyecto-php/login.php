<?php

//CONECTARSE A LA BASE DE DATOS E INICIAR SESIÓN

require_once 'includes/conexion.php';

//RECOGER DATOS DEL FORMULARIO

if (isset($_POST)) {

    //Borrar error antiguo
    if(isset($_SESSION['error_login'])) {
        session_unset();
    }

    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1;";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            //Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

            if (isset($_SESSION['error_login'])) {
                session_unset();
            }
        }

        else {
            $_SESSION['error_login'] = "Login incorrecto";
        }
    }

    else {
        $_SESSION['error_login'] = "Login incorrecto";
    }
    
}

header('Location: index.php');





