<?php
include_once $root.'send.php'; //Здесь находится функция для отправки запроса
$user=array(
    'USER_LOGIN'=>'Grand08-08@mail.ru', #Ваш логин (электронная почта)
    'USER_HASH'=>'1fdcceaef1513850ad4dd1c75fe2d403' #Хэш для доступа к API (смотрите в профиле пользователя)
);

$subdomain='new577bf732f2332'; #Наш аккаунт - поддомен


$link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json'; #Формируем ссылку для запроса

$out = send($user,$link,'POST');

$Response=json_decode($out,true);
$Response=$Response['response'];
if(isset($Response['auth'])) #Флаг авторизации доступен в свойстве "auth"
{
    
    return 'Авторизация прошла успешно';
}
return 'Авторизация не удалась';