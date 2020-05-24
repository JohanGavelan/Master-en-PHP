<?php

/*
// Abrir archivo
$archivo = fopen("fichero.txt", "a+");


//Leer coontenido
while (!feof($archivo)) {    
  
    $contenido = fgets($archivo); 
    echo $contenido . '<br>';

}

// Escribir en el archivo
fwrite($archivo, 'Soy un texto añadido desde PHP');

//Cerrar archivo
fclose($archivo); 
*/

// Copiar
copy('fichero.txt', 'fichero_copia.txt') or die("Error al copiar");

// Renombrar 
rename('fichero_copia.txt', 'fichero_renombrado.txt');

// Eliminar
unlink('fichero_renombrado.txt') or die ("Error al eliminar");

// Comprobar existencia del archivo

if (file_exists('fichero.txt')) {
    echo 'El archivo existe';
}

else {
    echo 'El archivo NO existe';
}