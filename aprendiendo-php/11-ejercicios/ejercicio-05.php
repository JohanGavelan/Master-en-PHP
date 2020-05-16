<?php


if (isset($_GET['x']) && isset($_GET['y'])) {

    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];

    if ($x < $y) { 
        
        for ($x; $x <= $y; $x++) {

        echo "<p>$x</p>";

        }

    }

    else {

        echo "X debe ser menor que Y";

    }

}

else {
    echo 'Introduce los números X y Y en la url';
}