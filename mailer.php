<?php

$name = $_POST["name"];
$name_empresa = $_POST["name_empresa"];
$email = $_POST["email"];
$telemovel = $_POST["telemovel"];
$drop = $_POST["drop"];
$como = $_POST["como"];
$preferences = $_POST["preferences"];
$comment = $_POST["comment"];

require "phpmailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "pesoliquido231@gmail.com";
$mail->Password = "sFr6ytwx3ARfq59L";

$mail->setFrom($email, $name);
$mail->addAddress("pesoliquido231@gmail.com");

$mail->Subject = $email;
$mail->Body = "Nome: $name <br>Nome da empresa: $name_empresa<br>Email: $email<br>Telemovel: $telemovel<br>Projeto: $drop<br>Como nos encontrou: $como<br>Assunto: $comment";

$mail->send();

header("Location: contactenos.html");