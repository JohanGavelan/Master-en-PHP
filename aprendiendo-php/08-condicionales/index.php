<?php


/* 

// Operadores de comparación

== igual

=== idéntico

!= distinto

!== no idéntico

<> diferente

< menos que

> mayor que 

<= menos igual que

=> mayor igual que


// Operadores lógicos

&& and Y

|| or O

! NOT NO

and, or


*/

// Ejemplo 1

$color = 'verde';


if ($color == 'rojo') {
    
    echo 'El color es rojo';

}

else {

    echo 'El color NO es rojo'; 

}

echo '<br>';


// Ejemplo 2

$year = 2019;


if ($year != 2019) {

    echo 'Es un año diferente a 2019';

}

else {

    echo 'Estamos en 2019';

}

echo '<br>';


// Ejemplo 3

$nombre = 'David';
$ciudad = 'Madrid';
$continente = 'Europa';
$edad = 49;
$mayor_de_edad = 18;


if ($edad >= $mayor_de_edad) {

    echo "<h1>$nombre es mayor de edad</h1>";
    
    if ($continente == 'Europa') {

        echo "<h2>Y vive en $ciudad</h2>";

    } else {

        echo "Y no es europeo";

    }

} else {

    echo "<h2>$nombre no es mayor de edad</h2>";

}

echo '<hr>';


// Ejemplo 4

$dia = 4;

if ($dia == 1) {
    echo 'Es Lunes';
}

elseif ($dia == 2) {
    echo 'Es Martes';
}

elseif ($dia == 3) {
    echo 'Es Miércoles';
}

elseif ($dia == 4) {
    echo 'Es Jueves';
}

elseif ($dia == 5) {
    echo 'Es Viernes';
}

else {
    echo 'Es fin de semana';
}

echo '<hr>';

// SWTICH

$dia = 1;

switch($dia) {
    case 1:
        echo 'Lunes';
    break;

    case 2:
        echo 'Martes';
    break;

    case 3:
        echo 'Miércoles';
    break;

    case 4:
        echo 'Jueves';
    break;

    case 5:
        echo 'Viernes';
    break;

    default:
        echo 'Es fin de semana';
}


echo '<hr>';

// Ejemplo 5

$edad_oficial = 18;
$edad_1 = 18;
$edad_2 = 64;

if ($edad_oficial >= $edad_1 && $edad_oficial <= $edad_2) {
    echo "Esta en edad de trabajar";
} 

else {
    echo "No puede trabajar";
}

echo "<hr>";


$pais = 'Francia';

if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
    echo "En este país se habla español";
}

else {
    echo "En este país NO se habla español";
}

echo '<hr>';


// GO TO

goto marca;

echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca:

echo 'Me he saltado 4 echos';




