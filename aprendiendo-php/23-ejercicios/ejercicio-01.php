<?php


session_start();


if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}

if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}



?>

<h1>El valor de la sesión número es: <?= $_SESSION['numero'] ?> </h1>
<a href="ejercicio-01.php?counter=1">Aumentar el valor en 1</a>
<a href="ejercicio-01.php?counter=0">Disminuir el valor en 1</a>