<?php
    include_once $root.'send.php'; //Здесь находится функция для отправки запроса
    $contacts['request']['contacts']['update']=array( 'update'=>array(
        'id'=>$value['id'],
        'name'=>$data['name'], #Обновляем имя контакта
        'last_modified'=>time(),
        'linked_leads_id'=>array($Response_deal[0]['id']), #Связываем с новой сделкой

    )
);
    $subdomain='new577bf732f2332'; #Наш аккаунт - поддомен
    #Формируем ссылку для запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';

    $out=send($contacts,$link,'POST');