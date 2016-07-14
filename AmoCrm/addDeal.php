<?php
    include_once $root.'send.php'; //Здесь находится функция для отправки запроса
    $leads['request']['leads']['add']=array(
    array(
        'name'=>'Тестовая сделка',

        'status_id'=>$account['leads_statuses'][0]['id'], //Добавляем для сделки статус первій из воронки
        'price'=>200,
       
    )
    );


    $subdomain='new577bf732f2332'; #Наш аккаунт - поддомен
    #Формируем ссылку для запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';

    $out =send($leads,$link,'POST');

    $Response_deal=json_decode($out,true);
    $Response_deal=$Response_deal['response']['leads']['add'];  //Массив данных, который мы будем использовать для связи сделки с контактами и заданиями
    
   
