
<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$userPhone = $_POST['userphone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма упешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;






    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'tucompanyru@gmail.com'; // Логин на почте
    $mail->Password   = 'At010401SmB'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('tucompanyru@gmail.com', 'Тимур Хайданов'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('timurhaidanov@gmail.com'); // Ещё один, если нужен

  




        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Новая заявка';
        $mail->Body    = "<b>Имя:</b> $userName <br>
        <b>Телефон:</b> $userPhone";




// Проверяем отравленность сообщения
if ($mail->send()) {
    header('Location: thanks.php');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
}catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}



