<?php 

echo "<pre>";
var_dump($_FILES);

$basename = $_FILES["imagen"]["name"];
$image_path = $_FILES["imagen"]["tmp_name"];
$path_save = "images/$basename";

move_uploaded_file($image_path, $path_save);


?>