<?php $array = ['hola', 'hola1'] ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < 10; $i++): ?>
            <li><?= $i ?></li>

        <?php endfor; ?>
        <?php $i = 0 ?>
        <?php while($i < 10): ?>
            <li><?= $i ?></li>
            <?php $i++ ?>

        <?php endwhile; ?>
    </ul>
    <ul>
        <?php foreach($array as $user): ?>

            <li><?= $user?></li>

        <?php endforeach; ?>
    </ul>
</body>
</html>