<?php
if($_POST['name']&&$_POST['email']){
    
  $filename = 'files/price/price.zip'; //Имя файла для прикрепления
  $to = $_POST['email']; //Кому
  $from = "goldencoronajp@gmail.com"; //От кого
  $subject = "Price from Goldencorona.com thank you for your interest in our company"; //Тема
  $message = "This mail was sent from golden corona company. We are happy to cooperate with you."; //Текст письма
  $boundary = "---"; //Разделитель
  /* Заголовки */
  $headers = "From: $from\nReply-To: $from\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
  $body = "--$boundary\n";
  /* Присоединяем текстовое сообщение */
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printablenn";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
  $body .= $message."\n";
  $body .= "--$boundary\n";
  $file = fopen($filename, "r"); //Открываем файл
  $text = fread($file, filesize($filename)); //Считываем весь файл
  fclose($file); //Закрываем файл
  /* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
  $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n";
  $body .= "Content-Transfer-Encoding: base64\n";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
  $body .= chunk_split(base64_encode($text))."\n";
  $body .= "--".$boundary ."--\n";
  mail($to, $subject, $body, $headers); //Отправляем письмо
  mail('ulikossnokia@mail.ru','Скачали прайс','Скачали прайс '.$_POST['email'], 'Отчет об отправки почты');  
//    $name = strip_tags(htmlspecialchars($_POST['name']));        
//    $email =  strip_tags(htmlspecialchars($_POST['email']));
//    $duplicating = $DB->query("SELECT * FROM users WHERE email='".$email."'")->fetch();
    
//    if(!$duplicating){
//        $DB->query("INSERT INTO users (name, email) VALUES ('".$name."','".$email."')");
//    }    
  $_SESSION['mail_sent'] = 'Success!!';
}

$tpl = 'authenticate';

