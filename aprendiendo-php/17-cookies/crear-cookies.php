<?php


// Crear cookie

// setcookie('nombre', 'valor en texto', caducidad, ruta, dominio);

setcookie('micookie', 'cookie value');

setcookie('oneyear', 'cookie value 365', time() + (60*60*24*365));

header('Location:view-cookies.php');

?>