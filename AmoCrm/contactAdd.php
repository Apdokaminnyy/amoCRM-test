<?php
    include_once $root.'send.php'; //Здесь находится функция для отправки запроса
    $contacts['request']['contacts']['add']=array(
    array(
        'name'=>$data['name'], #Имя контакта из формы

        'linked_leads_id'=>array(
            $Response_deal[0]['id'] //ID сделки которая заключалась ранее в addDeal.php
        ),
        'custom_fields'=>array(
            array(

                'id'=>$account['custom_fields']['contacts'][1]['id'], #Уникальный индентификатор заполняемого дополнительного поля для телефона из accountResponse
                'values'=>array(
                    array(
                        'value'=>(int)$data['phone'],       //Телефон из формы
                        'enum'=>'WORK'
                        )
                    )
                 )
             )
        )
    );



    $subdomain='new577bf732f2332'; #Наш аккаунт - поддомен
    #Формируем ссылку для запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';

    $out = send($contacts,$link,'POST');

    $Response_contact=json_decode($out,true);
    $Response_contact=$Response_contact['response']['contacts']['add'];
