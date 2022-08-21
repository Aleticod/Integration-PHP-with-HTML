<?php 

$tabla = [];

for ($i = 0; $i <= 12; $i++) {
    $resultado = 9 * $i;
    $text = "9 x $i = $resultado";
    array_push($tabla, $text);
}

// die();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buenas practicas</title>
</head>
<body>
    <h1>Tabla de 9</h1>
    <ul>
        <?php foreach($tabla as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>