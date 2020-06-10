<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - Blog</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">Blog de videojuegos</a>
        </div>
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php">Categoria 1</a>
            </li>
            <li>
                <a href="index.php">Categoria 2</a>
            </li>
            <li>
                <a href="index.php">Categoria 3</a>
            </li>
            <li>
                <a href="index.php">Categoria 4</a>
            </li>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
    <div class="clearfix"></div>
    </header>

    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identifícate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div id="register" class="bloque">
                <h3>Regístrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <div id="principal">
            <h1>Últimas entradas</h1>
            <article class="entrada">
                <h2>Título de mi entrada</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita excepturi quae neque quas eaque maiores perferendis aut quam omnis, doloremque porro odit assumenda dicta, consequuntur provident repellat, non earum deserunt.</p>
            </article>
            <article class="entrada">
                <h2>Título de mi entrada</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita excepturi quae neque quas eaque maiores perferendis aut quam omnis, doloremque porro odit assumenda dicta, consequuntur provident repellat, non earum deserunt.</p>
            </article>
            <article class="entrada">
                <h2>Título de mi entrada</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita excepturi quae neque quas eaque maiores perferendis aut quam omnis, doloremque porro odit assumenda dicta, consequuntur provident repellat, non earum deserunt.</p>
            </article>
            <article class="entrada">
                <h2>Título de mi entrada</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita excepturi quae neque quas eaque maiores perferendis aut quam omnis, doloremque porro odit assumenda dicta, consequuntur provident repellat, non earum deserunt.</p>
            </article>
        </div>
    </div>
    <footer id="pie">
        <p>Copyright &copy; 2020</p>
    </footer>
</body>
</html>     
