<?php

$conexion = mysqli_connect("localhost", "root", "", "phpmysql", "3308");

if (mysqli_connect_errno()) {
    
    echo 'La conexión a la base de datos MySQl ha fallado: ' . mysqli_connect_error();

}

else {

    echo 'Conexión realizada correctamente!';

}


// CONSULTA PARA CONFIGURAR LA CODIFICACIÓN DE CARACTERES

mysqli_query($conexion, "SET NAMES 'utf8'");


// CONSULTA SELECT DESDE PHP

$query = mysqli_query($conexion, 'SELECT  * FROM notas');


while ($nota = mysqli_fetch_assoc($query)) {
    echo '<h2>' . $nota['titulo'] . '</h2>' . '<br>';
    echo $nota['descripcion'] . '<br>';
}

// INSERTAR EN LA BASE DE DATOS DESDE PHP

$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";

$insert = mysqli_query($conexion, "$sql");


if ($insert) {
    echo 'DATOS INSERTADOS CORRECTAMENTE';
}

else {
    echo 'ERROR: ' . mysqli_error($conexion);
}