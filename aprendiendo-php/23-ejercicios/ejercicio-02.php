<?php

function validate($email) {

    if (empty($email) || !is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<h2>Introduzca un email válido</h2>";
    }

    else {
        $message = "<h2>El email se introdujo correctamente</h2>";
    }

    return $message;

}


if (isset($_GET['email'])) {
    
    $email = $_GET['email'];

    echo validate($email);
}  

else {
    echo "<h2>Introduzca su email</h2>";
}

