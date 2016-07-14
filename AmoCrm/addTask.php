<?php
    include_once $root.'send.php'; //Здесь находится функция для отправки запроса
    $tasks['request']['tasks']['add']=array('add'=> array(
            'element_id'=>$Response_deal[0]['id'], # Связываем задачу с ID сделки из addDeal.php
            'element_type'=>2, #Показываем, что это - сделка, а не контакт
            'task_type'=>1, #Звонок
            'text'=>'Обработать новую заявку',
            'complete_till'=>time()+3600
        ));
    $subdomain='new577bf732f2332'; #Наш аккаунт - поддомен
    #Формируем ссылку для запроса
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/tasks/set';

    $out =send($tasks,$link,'POST');

    $Response_task=json_decode($out,true);
    $Response_task=$Response_task['response']['tasks']['add'];
    
    $output='ID добавленных задач:'.PHP_EOL;
    foreach($Response_task as $v)
        if(is_array($v))
            $output.=$v['id'].PHP_EOL;
    return $output;
