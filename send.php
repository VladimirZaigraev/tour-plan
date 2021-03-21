<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];


// Формирование самого письма
$title = "New message Best Tour Plan";
$body = "
<h2>New message</h2>
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Сообщение:</b><br> $message
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'vladimirzaigraev.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'tp@vladimirzaigraev.ru'; // Логин на почте
    $mail->Password   = 'yOzM35lLpN'; // Пароль на почте
    $mail->SMTPSecure = ' ';
    $mail->Port       = 25;
    $mail->setFrom('tp@vladimirzaigraev.ru', 'zva'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('zloywarwar87@yandex.ru');  
   

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.html');
//echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);