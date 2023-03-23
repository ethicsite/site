<?php

$x = $_POST["x"];
$x1 = $_POST["x1"];
$x2 = $_POST["x2"];
$x3 = $_POST["x3"];
$x4 = $_POST["x4"];
$x5 = $_POST["x5"];
$x6 = $_POST["x6"];
$x7 = $_POST["x7"];
$x8 = $_POST["x8"];

require "phpmailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->isHTML(true);

$mail->SMTPSecure = 'ssl';

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "geral@ethic-site.com";
$mail->Password = "hsopuncbvvgxwrbc";

$mail->addAddress("geral@ethic-site.com");

    $mail->Subject = $x3;
    $mail->Body = "Nome: $x <br>Nome da empresa: $x1<br>Tipo de negócio: $x2<br>Email: $x3<br>Telemovel: $x4<br>Como nos encontrou: $x5<br>Projeto: $x6<br>Pacote: $x7<br>Assunto: $x8";
 


$mail->send();

header("Location: contact.html");
