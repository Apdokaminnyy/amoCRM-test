<?php
    include_once $root.'send.php';  //Здесь находится функция для отправки запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/accounts/current'; #$subdomain уже объявляли выше
    
    $out = send('',$link,'GET');
    
    $Response=json_decode($out,true);
    $account=$Response['response']['account'];
    