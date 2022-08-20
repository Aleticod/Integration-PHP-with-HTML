<?php
$nombre = 'Juan';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiqueta con PHP</title>


</head>
<body>
    <!-- Three forms to print a text and tags -->
    <?php echo "<b>Esto es una texto en negrita</b>"; ?>
    <?= "<i>esto es un texto en italica </i>"?>
    <h3> Hola <?=$nombre?></h3> 
</body>
</html>