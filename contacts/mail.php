<?php 

require("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false){
    // Configuracion inicial de nuestro servidor

    $phpmailer = new PHPMailer();
    $phpmailer -> isSMTP();
    $phpmailer -> Host = 'smtp.mailtrap.io';
    $phpmailer -> SMTPAuth = true;
    $phpmailer -> Port = 2525;
    $phpmailer -> Username = '20870a4e8c4d0b';
    $phpmailer -> Password = 'df49e9527293f3';

    // Anadiendo destinatario

    $phpmailer -> setFrom('contact@miempresa.com', 'Mi Empresa');
    $phpmailer -> addAddress($email, $name);

    // Definiendo el contenido 

    $phpmailer -> isHTML($html);
    $phpmailer -> Subject = $subject;
    $phpmailer -> Body = $body;
    $phpmailer -> send();

}

?>