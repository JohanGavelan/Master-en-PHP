<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre"><br></p>

        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido"><br></p>

        <label for="button">Botón: </label><br>
        <p><input type="button" name="button" value="Click"><br></p>

        <label for="sexo">Sexo: </label><br>
        <p>
            Hombre<input type="checkbox" name="sexo" value="hombre">
            Mujer<input type="checkbox" name="sexo" value="mujer"><br>
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color"><br></p>

        <label for="date">Fecha: </label>
        <p><input type="date" name="date"><br></p>

        <label for="email">Correo: </label>
        <p><input type="email" name="email"><br></p>

        <label for="file">Archivo: </label>
        <p><input type="file" name="file"><br></p>

        <label for="tel">Teléfono: </label>
        <p><input type="tel" name="tel"><br></p>

        <label for="number">Número: </label>
        <p><input type="number" name="number"><br></p>

        <label for="password">Contraseña: </label>
        <p><input type="password" name="password"><br></p>

        <label for="continente">Continente: </label>
        <p>
            <input type="radio" name="continente" value="América">América<br>
            <input type="radio" name="continente" value="Europa">Europa<br>
            <input type="radio" name="continente" value="Asia">Asia<br>
        </p>

        <label for="web">Website URL: </label>
        <p><input type="url" name="web"><br></p>

        <p><textarea name="" id="" cols="30" rows="10"></textarea><br></p>

        <p>
        Películas: 
            <select name="películas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Avengers">Avengers</option>
                <option value="Iron Man">Iron Mann</option>
            </select><br>
        </p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

