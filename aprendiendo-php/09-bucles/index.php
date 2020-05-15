<?php


// While

/* $i = 0;


while ($i <= 10) {

    echo $i;

        if ($i != 10) {
            
            echo ', ';
        
        }

    $i++;

}


echo '<hr>'; */


// Ejercicio


if (isset($_GET['numero'])) {
    
    $numero = (int) $_GET{'numero'};

}

else {

    $numero = 1;

}


echo "<h1>Tabla de multiplicar del $numero</h1>";

$contador = 0;

while ($contador <= 10) {

    echo "$numero x $contador = " . ($numero * $contador) . '<br>';

    $contador++;    

}

echo '<hr>';



/* 

DO WHILE

do {
    serie de instrucciones
}

while (condición);

*/


$edad = 17;
$local_nivel = 1;


do {

    echo "Tienes acceso al nivel $local_nivel <br>";

    $local_nivel++;

}

while ($edad >= 18 && $local_nivel <= 3);

