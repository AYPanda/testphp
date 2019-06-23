?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
require_once "SendMailSmtpClass.php"; // подключаем класс
$mailSMTP = new SendMailSmtpClass('aleksey0500@gmail.com', 'milqetjcctujprix', 'ssl://smtp.gmail.com', 'Письмо с сайта', 465); // создаем экземпляр класса
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: PHP Test <aleksey0500@gmail.com>\r\n"; // от кого письмо
$headers .= "Reply-To: aleksey0500@gmail.com\r\n";
$headers .= "Return-Path: aleksey0500@gmail.com\r\n";
$headers .= "Errors-To: aleksey0500@gmail.com\r\n";
$result =  $mailSMTP->send('aleksey0500@gmail.com', $email, 'От '.$name.PHP_EOL.$msg, $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
if($result === true){
    echo "Письмо успешно отправлено";
    } else {
    echo "Письмо не отправлено. Ошибка: " . $result;
}

?>
