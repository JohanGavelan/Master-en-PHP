<?php


if (isset($_GET['x']) && isset($_GET['y'])) {

    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];

    if ($x < $y) { 

        for ($x; $x <= $y; $x++) {

            if ($x % 2 != 0) {

                echo "<p>$x es impar</p>";
    
            }

            else {

                echo "<p>$x es par</p>";

            }
        }
    }

    else {

        echo "X debe ser menor que Y";

    }

}

else {
    echo 'Introduce los números X y Y en la url';
}   