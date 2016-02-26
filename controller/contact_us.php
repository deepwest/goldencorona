<?php

if (isset($_POST['contact_us'])) {
    $color = '';
    if(!empty($_POST['color'])){$color = 'Клиента интересует цвет : ' . $_POST['color'];}
    $name = htmlspecialchars($_POST['contact_name']);
    $email = htmlspecialchars($_POST['contact_email']);
    $tel = htmlspecialchars($_POST['contact_tel']);
    $mes = htmlspecialchars($_POST['contact_message']);
    $to_mail = "goldencoronajp@gmail.com"; //Куда шлем сообщение goldencoronajp@gmail.com
    $theme_message = "Запрос от " . $name; //Тема сообщения
    $message = $color . "Емайл отправника " . $email . ". Его телефон " . $tel . " Его сообщение : " . $mes; //Текст сообщения
    $send_mail = mail($to_mail, $theme_message, $message);
    if ($send_mail) { //Проверяем уходит ли письмо  //Если уходит то выводим сообщение    о успшном выполнении функции
    } else { // А если не работает сообщаем    что не работает :)
    }
}
$tpl = 'contact_us';

