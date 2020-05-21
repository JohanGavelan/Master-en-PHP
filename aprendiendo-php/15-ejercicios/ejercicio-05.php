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



echo '<Table border=1px>';


    var_dump($videogames);
    

    echo '<tr>';

    foreach ($videogames as $key => $game) {

        echo "<th>$key</th>";
    }

    echo '</tr>';

    echo '<tr>';

    foreach ($videogames as $key => $game) {

        echo "<td>$game[0]</td>";
    }

    echo '</tr>';

    echo '<tr>';

    foreach ($videogames as $key => $game) {

        echo "<td>$game[1]</td>";
    }

    echo '</tr>';

    foreach ($videogames as $key => $game) {

        echo "<td>$game[2]</td>";
    }

    echo '</tr>';





echo '</Table>';


