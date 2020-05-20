<?php

$animales = array('León', 'Tortuga', 'T-rex');

$paises = ['Perú', 'México', 'Estados Unidos'];

echo $animales[0];

echo '<br>';

echo $paises[0];

// Array asociativo 

$personas = [

    'nombre' => 'Johan',

    'apellido' => 'Gavelán',

    'edad' => 23
];

// Arrays multidimensionales

$contactos = [

    ['nombre' => 'Johan',
    'email' => 'johan23@example.com'],

    ['nombre' => 'Luis',
    'email' => 'Luis28@example.com'],

    ['nombre' => 'Salvador',
    'email' => 'Salvador24@example.com']
];

foreach ($contactos as $key => $contacto) {

    var_dump($contacto['email']);

}

echo $contactos[1]['nombre'];

//

echo "<h3>Listado de Países</h3>";

echo '<ul>';

for ($i = 0; $i < count($paises); $i++) {

    echo "<li>$paises[$i]</li>";

}

echo '</ul>';

// Recorrer con foreach

foreach ($animales as $animales) {

    echo "<p>$animales</p>";

}

