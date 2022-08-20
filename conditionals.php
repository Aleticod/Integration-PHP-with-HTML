
<?php

$condition = false;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionales</title>
</head>
<body>

    <!-- Esto no se debe de hacer -->
    <?php
    if($condition) 
        echo '<p>La condicion es verdadera</p>';
    else
        echo '<p>La condicion es falsa</p>';
    ?>
    

    <!-- Este es aceptable -->
    <?php if($condition) {?>
        <b>La condicion es verdadera</b>
    <?php } else {?>
        <b>La condicion es falsa</b>
    <?php } ?>

    <!-- Eso si debemos hacer -->
    <?php if($condition): ?>
        <b>La condicion es verdadera</b>
    <?php else: ?>
        <b>La condicion es falsa</b>
    <?php endif; ?>
</body>
</html>