<?php

//Добавляем данные из формы в массив

$data=array(
    'name'=>isset($_POST['name']) ? $_POST['name'] : 'ss',
    'phone'=>isset($_POST['phone']) ? $_POST['phone'] : ''

);

$bot_message = 'Имя ' . $data['name'] . '. Телефон: ' . $data['phone']; //Текст сообщения для бота telegram
$chat_id = '-101984360"';
$telegram_token='260292309:AAG1MX4ZmG5qNUusrMSPJFVIwHW3VorjDuA';

#Если не указано имя или Телефон контакта - уведомляем
if(empty($data['name']))
    die('Не заполнено имя контакта');
if(empty($data['phone']))
    die('Не заполнен телефон контакта');
