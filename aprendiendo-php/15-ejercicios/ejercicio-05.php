<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    
</body>
</html>


<?php


$videogames = [

    'Action' => ['Gta', 'COD', 'PUGB'],

    'Adventure' => ['Assasins', 'Crash', 'Prince of Persia'],

    'Deports' => ['FIFA', 'PES 2019', 'MOTO GP']
];

?>


<h2>Tabla de videojuegos</h2>


<table border="1">

    <?php require 'includes/heading.php' ?>
    <?php require 'includes/row-01.php' ?>
    <?php require 'includes/row-02.php' ?>
    <?php require 'includes/row-03.php' ?>

</table>