<?php
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$userfile = $_POST['file']; 
$usermes = $_POST['message']; 
 
// Формирование заголовка письма
$sendto   = "alenavereshaka16@gmail.com"; // почта, на которую будет приходить письмо
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($sendto) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg .= "Cообщение с сайта\n";
$msg .= "От кого: ".$username."\r\n";
$msg .= "Почта: ".$usermail."\r\n";
$msg .= "Телефон:".$usertel."\r\n";
$msg .= "Файл:".$userfile."\r\n";
$msg .= "Сообщение:".$usermes."\r\n";
mail($sendto, $subject, $msg, $headers);

return 1;
//header("Location: index.html");
//exit();
?>