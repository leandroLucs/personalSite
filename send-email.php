<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './lib/phpMailer/vendor/autoload.php';
require './lib/dotEnv/vendor/autoload.php';

$mail = new PHPMailer(true);
$name =  utf8_encode($_POST['name']);
$email =  utf8_encode($_POST['email']);
$message =  utf8_encode($_POST['message']);

$dotenv =  Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
try {
  $mail->IsSMTP();
  $mail->Host = "ssl://smtp.titan.email";
  $mail->Port = "465";
  $mail->SMTPSecure = "tls";
  $mail->SMTPAuth = "true";
  $mail->Username = "admin@airydev.com.br";
  $mail->Password = getenv("EMAIL_PASSWORD"); 

  //Mensagem
  $mail->setFrom($mail->Username, "Leandro Santos");
  $mail->addAddress("contato@airydev.com.br");
  
  //Conteúdo
  $mail->IsHTML(true);
  $message_content = utf8_decode("Você recebeu uma mensagem de $name ($email):<br><br>Mensagem:<br>$message");
  $message_non_html_content = utf8_decode("Você recebeu uma mensagem de $name ($email)\n\nMensagem: $message");
  $mail->Subject = "Fale Conosco";
  $mail->Body = $message_content;
  $mail->AltBody = $message_non_html_content;
  
  //enviar
  $mail->send();
  echo("Message has been sent");
  
} catch (Exception $e) {
  echo("Message couldn't be sent.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sendEmail</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    body {
      padding-top: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .container {
      position: absolute;
      top: 10;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      width: 30rem;
      height: 13rem;
      border: 1px solid #cdcdcd;
      background: black;
      opacity: 0.4;
      
    }

    .button {
      display: flex;
      align-items: center;
      opacity: 1;
      height: 3rem;
      background: #282828;
      color: var(--text-color);
      border: 1px solid #404040;
      padding: 0rem 1rem;
      margin-bottom: 2rem;
      cursor: pointer;
      border-radius: 5%;
      transition: 0.3s;
    }

    span {
      height: auto;
    }

    .button:hover {
      background: #1b1b1b;
    }
  </style>
</head>
<body>
  <div class="container">
    <a class="button" href="index.html"><br><span>Return to site</span></a>
  </div>
</body>

</html>