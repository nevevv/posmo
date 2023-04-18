<?php

$to = 'mail';

$subject = 'Письмо с сайта';

$userName = $_POST['name'];
$userPhone = $_POST['phone'];
$busines_name = $_POST['busines_name'];
$busines_cat = $_POST['busines_cat'];
$link = $_POST['link']

$message = 'Имя пользователя ' . $username . '<br />' . 'Номер телефона - ' . $userPhone  . '<br />' . ' Название бизнеса - ' . $busines_name  . '<br />' . 'Категория бизнеса - ' . $busines_cat . '<br />' . 'Ссылка - ' . $link ;

$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html" . "\r\n";

mail($to, $subject, $message, $headers); 


header('Location: /index.php');

// setcookie("TestCookie", $userName);

?>