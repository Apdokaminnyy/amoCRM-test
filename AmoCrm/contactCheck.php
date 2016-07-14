<?php
    include_once $root.'send.php'; //Здесь находится функция для отправки запроса
    $subdomain='new577bf732f2332'; #Наш аккаунт - поддомен
    #Формируем ссылку для запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/list?query='.$data['phone'];

    $out = send('',$link,'GET');

    $Response_contact=json_decode($out,true);
    $Response_contact=$Response_contact['response'];

    if (isset($Response_contact)) {                           //Если контакты с таким номером уже есть
        foreach ($Response_contact['contacts'] as $value) {   //Запускаем файл обновления контакта
            include $root . 'contactUpdate.php';
            
        }
    }
    else {                                                     //Если нет
        include $root.'contactAdd.php';                       //запускаем файл создания контакта
    }