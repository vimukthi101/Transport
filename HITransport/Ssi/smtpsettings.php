<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
//change following to admin@gmail.com or scat@gmail.com
$mail->Username = "darshana.devinda@gmail.com";
$mail->Password = "damayantha123";
$mail->setFrom('darshana.devinda@gmail.com', 'HIKH TRANSPORT MANAGEMENT SYSTEM');


$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
)
?>
