<?php 

echo "<pre>";
var_dump($_FILES);

$basename = $_FILES["imagen"]["name"];

echo $basename;
?>