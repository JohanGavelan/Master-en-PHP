<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>


<div id="principal">
    <h1>Crear entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido</p>
    <br>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo">

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>

        <label for="categoria"></label>
        <select name="categoria" cols="30" rows="10">
            <?php
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)) :
                while ($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
           
                <option value="<?=$categoria['ID']?>">
                    <?=$categoria['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>

        </select>

        <input type="submit" value="Guardar">
    </form>
</div>


<?php require_once 'includes/footer.php' ?>