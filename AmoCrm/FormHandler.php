<?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
    $root=__DIR__.DIRECTORY_SEPARATOR;
    include $root.'prepare.php';            //Подключаем файл подготовки для считывания информации из формы
    include $root.'auth.php';               //Подключаем файл авторизации
    include $root.'accountResponse.php';    //Подключаем файл  для считывания информации из аккаунта
    include $root.'addDeal.php';            //Подключаем файл для добавления сделки
    include $root.'contactCheck.php';       //Подключаем файл для проверки и обновления или добавления контакта
    include $root.'addTask.php';            //Подключаем файл для добавления задания
    include $root.'telegram.php';           //Подключаем класс бота телеграм
    $bot = new Telegram($telegram_token);
    $bot->sendMessage($chat_id,$bot_message);
    