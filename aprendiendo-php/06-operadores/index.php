<?php


// Operadores aritméticos


$x = 55;

$y = 28;


echo 'Suma: ' . ($x + $y) . '<br>';

echo 'Resta: ' . ($x - $y) . '<br>';

echo 'Multiplicación: ' . ($x * $y) . '<br>';

echo 'División: ' . ($x / $y) . '<br>';

echo 'Lo que resta es: ' . ($x % $y) . '<br>';



// Operadores de incremento y decremento


$year = 2019;


// Incremento
// $year = $year + 1 
$year++;

// Decremento
// $year = $year - 1 
$year--;

// Pre-incremento
// $year = 1 + $year
++$year;

// Pre-decremento
// $year = 1 - $year
--$year;


echo "<h1>$year</h1>";



// Operadores de asignación


$edad = 23;


echo $edad . '<br>';

echo ($edad *= 5) . '<br>';

var_dump($edad);