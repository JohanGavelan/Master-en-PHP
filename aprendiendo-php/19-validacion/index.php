<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php 

        if (isset($_GET['error'])) {
            
            $error = $_GET['error'];

            if ($error == 'Faltan datos') {

                echo '<strong style="color: red">Introduce los datos correctamente</strong>';

            }

            if ($error == 'nombre') {

                echo '<strong style="color: red">Introduce tu nombre correctamente</strong>';

            }

            if ($error == 'edad') {

                echo '<strong style="color: red">Introduce una edad correcta</strong>';

            }

            if ($error == 'apellidos') {

                echo '<strong style="color: red">Introduce tus apellidos correctamente</strong>';

            }

            if ($error == 'email') {

                echo '<strong style="color: red">Ingresa un email válido</strong>';

            }

            if ($error == 'password') {

                echo '<strong style="color: red">Ingresa una contraseña de más de 5 digitos</strong>';

            }
        }
    ?>

    <form action="view-form.php" method="POST">
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" pattern="[a-zA-Z ]+" required><br>

        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" pattern="[a-zA-Z ]+" required><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" pattern="[0-9]+" required><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" required><br>

        <label for="password">Contraseña: </label><br>
        <input type="password" name="password" minlength="5" required><br>

        <input type="Submit" value="Enviar">
    </form>
</body>
</html>