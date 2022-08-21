<?php 

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];


$html_name = htmlentities($name);
$html_username = htmlentities($username);
$html_email = htmlentities($email);
$html_age = htmlentities($age);

$add_slash = addslashes($username);

$only_words = preg_replace("/\d/", "", $username);
$only_number = preg_replace("/\D/", "", $age);
$only_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Name: <?= $html_name ?></p>
    <p>Username: <?= $html_username ?></p>
    <p>Email: <?= $html_email ?></p>
    <p>Edad: <?= $html_age ?></p>
    <p>Username: <?= $add_slash ?></p>
    <p>edad: <?= $sanitize_int ?></p>
</body>
</html>