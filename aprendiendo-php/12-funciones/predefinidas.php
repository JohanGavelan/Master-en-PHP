<?php


$nombre = 'Johan Gavelan';

var_dump($nombre);


echo date('d-m-Y') . '<br>';

echo time() . '<br>';


// Funciones matemáticas predefinidas

echo 'Raíz cuadrada de 9 = ' . sqrt(9) . '<br>'; 

echo 'Número aleatorio estre 10 y 30 = ' . rand(10, 30) . '<br>';

echo 'Número pi = ' . pi() . '<br>';

echo 'Número redondeado 8.7 = ' . round(8.7) . '<br>';


// Más funciones generales

echo gettype($nombre) . '<br>';


// Detectar tipado

if (is_string($nombre)) {
    echo "Esa variable es un string<br>";
} 

if (!is_float($nombre)) {
    echo "Esa variable no es un float<br>";
}

// Comprobar si existe una variable

if (isset($nombre)) {
    echo "La variable existe<br>";
}

else {
    echo "La variable no existe<br>";
}

// Limpiar espacios

$frase = '   contenido    ';

var_dump(trim($frase));

// Eliminar variables / índices

$year = 2020;

unset($year);

// Comprobar almacenamiento de una variable

$texto = "   ";

if(empty(trim($texto))) {
    echo "Rellena el campo del formulario<br>";
}

else {
    echo "La variable tiene contenido<br>";
}

// Conteo de carácteres de un string

$string = 'Johan';

echo strlen($string) . '<br>';

// Encontrar la posición de un carácter determinado

$frase = 'La vida es bella';

echo strpos($frase, 'bella') . '<br>';

echo "$frase<br>";

// Reemplezar palabras en un string

$frase = str_replace('bella', 'bellisima', $frase);

echo $frase . '<br>';

// Mayúsculas y minúsculas

echo strtolower($frase) . '<br>';

echo strtoupper($frase);




