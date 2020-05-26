
<?php 

$result = 0;

if ((isset($_GET['input-1'])) && (isset($_GET['input-2']))) {

    $x = (int) $_GET['input-1'];
    $y = (int) $_GET['input-2'];

        if (isset($_GET['suma'])) {
            $result = $x + $y;
        }

        if (isset($_GET['resta'])) {
            $result = $x - $y;
        }

        if (isset($_GET['multiplicacion'])) {
            $result = $x * $y;
        }

        if (isset($_GET['division'])) {
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
    <form method="GET">
        <input type="text" name="input-1" required>
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