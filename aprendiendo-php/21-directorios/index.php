<?php

if (!is_dir('new_folder'))

    mkdir('new_folder', 0777) or die('No se puede crear la carpeta');

else {
    echo 'Folder' . '<br>';
}

echo '<hr>';

// rmdir('New_folder');

if ($gestor = opendir('./new_folder')) {

    while(false !== ($archivo = readdir($gestor))) {
        
        if ($archivo != '.' && $archivo != '..') {echo "$archivo<br>";}
        
    }

}

