<?php

/*
function countTo($num) {

    for ($x = 1; $x <= $num; $x++) {

        echo "<p>$x</p>";

    }

}

countTo(3); 

echo '<hr>';
*/


/*
function Tabla($num) {
    
    echo "<h3>Tabla de multiplicar del $num</h3>";

    for ($i = 1; $i <= 10; $i++) {

        echo "$num x $i = " . ($num * $i) . '<br>';

    }

}


for ($i = 1; $i <= 10; $i++) {

    Tabla($i);

}
*/


function calculadora($num1, $num2, $bold = false) {

    $suma = $num1 + $num2 . '<br>';
    $resta = $num1 - $num2 . '<br>';
    $multi = $num1 * $num2 . '<br>';
    $division = $num1 / $num2;

    $cadena = "";

    if ($bold) {

        $cadena .= '<h1>';

    }

    $cadena .= "Suma: $suma<br>";
    $cadena .= "Resta: $resta<br>";
    $cadena .= "Multiplicación: $multi<br>";
    $cadena .= "División: $division";

    $cadena .= '<hr>';

    if ($bold) {

        $cadena .= '</h1>';

    }

    return $cadena;
}

echo calculadora(70, 30);
echo calculadora(20, 40);
echo calculadora(5, 24);



function myName($name) {

    $a = "Mi nombre es $name";

    return $a;

}


function myLastName($last_name) {

    $b = "Mi apellido es $last_name";

    return $b;

}

function completeName($name, $last_name) {

    $text = myName($name) . '<br>' . myLastName($last_name);

    return $text;
}


echo completeName('Johan', 'Gavelan');



echo '<hr>';


$m = 'Este es un ';
$m .= 'mensaje concatenado';

echo $m;


echo "<h3>Lista de números</h3>";

$a = "1 <br>";
$a .= "2 <br>";
$a .= "3 <br>";
$a .= "4 <br>";
$a .= "5";

echo $a;

echo '<hr>';



