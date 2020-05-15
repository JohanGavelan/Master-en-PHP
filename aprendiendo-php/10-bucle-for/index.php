<?php


$suma = 0;

for ($i = 0; $i <= 100; $i++) {

    $suma += $i;

}


echo "El resultado de la suma es $suma";



echo '<hr>';


if (isset($_GET['number'])) {

    $number = (int) $_GET['number'];

}

else {

    $number = 1;

}


echo "<h1>Tabla de multiplicar de $number</h1>";

for ($i = 0; $i <= 10; $i++) {

    if ($number == 45) {
        
        echo 'No podemos ejecutar esta tabla';
    break;
    }

    echo "$number x $i = " . ($number * $i) . '<br>';

}