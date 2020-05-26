
<?php 

$result = 0;

if ((isset($_POST['input-1'])) && (isset($_POST['input-2']))) {

    $x = (int) $_POST['input-1'];
    $y = (int) $_POST['input-2'];

        if (isset($_POST['suma'])) {
            $result = $x + $y;
        }

        if (isset($_POST['resta'])) {
            $result = $x - $y;
        }

        if (isset($_POST['multiplicacion'])) {
            $result = $x * $y;
        }

        if (isset($_POST['division'])) {
            $result = $x / $y;
        }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST">
        <input type="text" name="input-1" required autofocus> 
        <input type="text" name="input-2" required><?= '= ' . $result ?> <br><br>
        <div class="container">
            <button name="suma">+</button>
            <button name="resta">-</button>
            <button name="multiplicacion">×</button>
            <button name="division">÷</button>
        </div>
    </form>
</body>
</html>