<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];
$tipo = $archivo['type'];


if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/git') {

    if (!is_dir('images')) {

        mkdir('images', 0777);

    }

    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre );
    
    header('refresh: 5; URL=index.php');
    echo "<h2>Imagen subida correctamente</h2>";

} 

else {

    header('refresh: 5; URL=index.php');
    echo 'Sube la imagen en el formato solicitado porfavor (png, jpeg, jpg, git)';

}
