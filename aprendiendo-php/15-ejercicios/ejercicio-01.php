<?php 


$numbers = [34, 21, 65, 77, 43];

function showArray($numbers) {

    $result = "";

    foreach($numbers as $number) {

        $result .= "<p>$number</p>";

    }

    return $result;

}


// Mostrar 

echo showArray($numbers);

echo '<hr>';


// Ordenar

sort($numbers);

echo showArray($numbers);

echo '<hr>';


// Longitud 

echo "<h3>Número de elementos</h3>";

echo count($numbers);

echo '<hr>';


// Si existe o no

if (isset($_GET['number'])) {

    $buscado = $_GET['number'];

    echo "<h3>Búsqueda del número $buscado</h3>";

    $search = array_search($buscado, $numbers);

    if (!empty($search)) {

    echo "El número sí existe en el array, está en el índice: $search";

    }      

    else {

    echo "El número NO existe en el array";

    }   
}