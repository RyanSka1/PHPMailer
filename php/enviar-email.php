<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php'; 
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer();

    // Configuração
    $mail->Mailer = "smtp";
    $mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';   
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;     
	$mail->SMTPSecure = 'ssl'; 
    $mail->Host = 'smtp.gmail.com'; 
	$mail->Port = 465;
    //lcusohfmqdjuouii


    // Detalhes do envio de E-mail
	$mail->Username = '<username>'; 
	$mail->Password = "<password>";
	$mail->SetFrom('<email>', '<name>');
    $mail->addAddress('<email>','');
	$mail->Subject = "<subject>";


    // Mensagem
    $mensagem = "<h1> Token </h1>";
    $mensagem .= "<h3> 123456 </h3>";


    $mail->msgHTML($mensagem);
    $mail->send();

?>