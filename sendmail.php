<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;



$mail = new PHPMailer(true);

$subject = 'Письмо с сайта';

$userName = $_POST['name'];
$userPhone = $_POST['phone'];
$busines_name = $_POST['busines_name'];
$busines_cat = $_POST['busines_cat'];
$link = $_POST['link'];

$message = 'Имя пользователя ' . $userName . '<br />' . 'Номер телефона - ' . $userPhone  . '<br />' . ' Название бизнеса - ' . $busines_name  . '<br />' . 'Категория бизнеса - ' . $busines_cat . '<br />' . 'Ссылка - ' . $link ;


try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'server3.ahost.uz';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@slotspot.uz';                     //SMTP username
    $mail->Password   = '';                               //SMTP 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@slotspot.uz', 'slotspot.uz');
    $mail->addAddress('slotspotapp@gmail.com', '');     //Add a recipient
    $mail->addReplyTo('admin@slotspot.uz', 'slotspot.uz');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'slotspot.uz';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


header('Location: /');


?>
