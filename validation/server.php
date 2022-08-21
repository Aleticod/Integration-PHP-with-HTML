<?php 

// Validacion de datos
if( isset($_POST["name"]) && !empty($_POST["name"])) {
    echo "Hola, {$_POST['name']} ";
}
else {
    echo "No enviaste nada";
}

// Validacion de formularoi
if ( isset($_POST["form"])) {
    echo "El formulario fue enviado con exito";
}
else {
    echo "El formulario no fue enviado";
}

echo "<pre>";
var_dump(isset($_POST["name"]));
var_dump($_POST);

?>