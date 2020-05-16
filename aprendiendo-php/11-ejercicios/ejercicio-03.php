<?php 

/*

$i = 0;

while ($i <= 40) {
    
    echo '<p>' . ($i * $i) . '<p>';

    $i++;

}

*/


for ($i = 0; $i <= 40 ; $i++) {

    $potencia = ($i * $i);

    echo "<p>El cuadrado de $i es $potencia</p>"; 

}   