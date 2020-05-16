<?php 


/* 
if (isset($_GET['x'])) {

    $x = (int) $_GET['x'];

}

else {

    $x = 0;

}


if (isset($_GET['y'])) {

    $y = (int) $_GET['y'];

}

else {

    $y = 0;

}



echo 'Suma: ' . ($x + $y) . '<br>';
echo 'Resta: ' . ($x - $y) . '<br>';
echo 'Multiplicación: ' . ($x * $y) . '<br>';
echo 'División: ' . ($x / $y) . '<br>';
*/


if (isset($_GET['x']) && isset($_GET['y'])) {

    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];

    echo "<h1>Calculadora</h1>";

    echo 'Suma: ' . ($x + $y) . '<br>';
    echo 'Resta: ' . ($x - $y) . '<br>';
    echo 'Multiplicación: ' . ($x * $y) . '<br>';
    echo 'División: ' . ($x / $y);

}

else {
    echo 'Introduce los números X y Y en la url';
}

