<?php


$videogames = ['WoW', 'Black Dessert', 'Call of Duty'];

$numbers = [1, 2, 8, 4, 7, 5, 3, 6];

sort($numbers);

// var_dump($numbers);


// Añadir elementos a un array

$videogames[] = 'Fortnite';

array_push($videogames, 'Counter Strike');


// Eliminar elementos en el array

array_pop($videogames);

unset($videogames[2]);

var_dump($videogames);


// Elemento aleatorio EN un array 

$aleatorio = array_rand($videogames);

echo $videogames[$aleatorio];


// Voltear un array

$reverse = array_reverse($numbers);

var_dump($reverse);


// Buscar dentro de un array

var_dump(array_search('Black Dessert', $videogames));


// Contar número de elementos 

echo count($videogames);


