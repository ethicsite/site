<?php

$name = $_POST["name"];
$name_empresa = $_POST["name_empresa"];
$tNegocio = $_POST["tNegocio"];
$email = $_POST["email"];
$telemovel = $_POST["telemovel"];
$como = $_POST["como"];
$drop = $_POST["drop"];
$drop2 = $_POST["drop2"];
$comment = $_POST["comment"];

require "phpmailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->isHTML(true);


$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "geral@ethic-site.com";
$mail->Password = "hsopuncbvvgxwrbc";

$mail->setFrom($email, $name);
$mail->addAddress("geral@ethic-site.com");

    $mail->Subject = $email;
    $mail->Body = "Nome: $name <br>Nome da empresa: $name_empresa<br>Tipo de negócio: $tNegocio<br>Email: $email<br>Telemovel: $telemovel<br>Como nos encontrou: $como<br>Projeto: $drop<br>Pacote: $drop2<br>Assunto: $comment";
 


$mail->send();

echo "<meta http-equiv='refresh' content='0;URL=contact.html#section2'>";