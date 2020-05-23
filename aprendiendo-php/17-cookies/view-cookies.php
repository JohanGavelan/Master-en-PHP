<?php


if (isset($_COOKIE['micookie'])) {

    echo '<h2>' . $_COOKIE['micookie'] . '</h2>';

} 

else {

    echo 'No existe la cookie' . '<br>';

}

if (isset($_COOKIE['oneyear'])) {

    echo '<h2>' . $_COOKIE['oneyear'] . '</h2>';

} 

else {

    echo 'No existe la cookie' . '<br>';

}

?>


<a href="borrar-cookies.php">Borrar cookies</a><br>
<a href="crear-cookies.php">Crear cookies</a>