<?php




if (isset($_GET['nombre'])) {


    $nombre = $_GET['nombre'];

}

else {

    $nombre = 'indefinido';

}


echo "Tu nombre es $nombre"; 

