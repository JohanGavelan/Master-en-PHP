<?php 

if(isset($_POST)) {
    //Conexión a la base de datos
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ?  (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['ID'];
 
    //Array de errores
    $errores = [];

    //Validación
    if(empty($titulo)) {
        $errores['titulo'] = 'Inserte el título';
    }

    elseif(empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida';
    }

    elseif(empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoría no es válida';
    }

    //Inserción de datos después de la validación
    if(count($errores) == 0) {
        $sql = "INSERT INTO entradas VALUES(NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";

        $guardar = mysqli_query($db, $sql); 
    }

    else {
        $_SESSION['errores_entrada'] = $errores;
    }

}

header("Location: index.php"); 