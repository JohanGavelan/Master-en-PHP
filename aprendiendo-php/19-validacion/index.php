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

        }

    ?>

    <form action="view-form.php" method="POST">
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" required pattern="[A-Za-z ]+"><br>

        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" required pattern="[A-Za-z ]+"><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" required pattern="[0-9]+"><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" required><br>

        <label for="password">Contraseña: </label><br>
        <input type="password" name="password" required><br>

        <input type="Submit" value="Enviar">
    </form>
</body>
</html>