<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <style>table, th, td {
     border: 1px solid black;
    }</style>
</head>
<body>
    
    
    
    <?php

    echo '<table>';

    if (isset($_GET['num'])) {

        $num = (int) $_GET['num'];


        for ($i = 1; $i <= 10; $i++) {

            $resultado = ($num * $i);
            
            echo
                
                "
                
                <tr>
                    <td>$num x $i</td>
                    <td>$resultado</td>
                </tr>
            
                ";
        }

    echo '</table>';
        
    }


    else {
        echo 'Introduce el número a ser multiplicado (num = ?)';
    }


    ?>


</body>
</html> -->



<?php 

    echo '<table border=1px>';


    echo '<tr>'; // celda 1 abierta

        for ($i = 1; $i <= 10; $i++) {

            echo "<td>Tabla del $i</td>";

        }

    echo '</tr>'; // celda 1 cerrada


    echo '<br>';


    
    echo '<tr>'; // celda 2 abierta


    for ($i = 1; $i <= 10; $i++) {

        echo '<td>';   

        for ($num = 1; $num <= 10; $num++) {

            $resultado = $num * $i;

            echo "$i x $num = $resultado<br>";

        }

        echo '</td>';

    }

    
    echo '</tr>'; // celda 2 cerrada




    echo '</table>';