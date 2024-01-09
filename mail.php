<?php
    $data = $_POST;
    $name = $data['name'];
    $phone = $data['phone'];
    $messenger = $data['messenger'];
    
    $selectedTechnologies = '';
    
    foreach($technologies as $item) {
        echo "$item<br />";
        
        $selectedTechnologies .= $item . "\n";
    }
    
    $textile = $data['textile'];
    $procedures = $data['procedures'];
    $fasting = $data['fasting'];
 
    $to = ""; 
    $date = date("d.m.Y"); 
    $time = date("h:i");
    $subject = "Заявки c Сайта";

    $msg = "
    Имя: $name;
    Телефон: $phone;
    Мессенджер: $messenger";

    mail($to, $subject, $msg, "From: $to ");

    // Отправка в телеграм
    $token = "";
    $chat_id = "";

    // Создаем массив
    $arr = array(
        "Пара" => $jaw,
        "Сумма" => $summ,
        "Телеграмм" => $telegramm
    );

    // Цикл по массиву (собираем сообщение)
    $txt = "";
    foreach ($arr as $key => $value) {
        $txt .= "<b>{$key}</b>: {$value};\n";
    }

    // Отправляем сообщение в телеграм
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $params = [
        'chat_id' => $chat_id,
        'parse_mode' => 'html',
        'text' => $txt,
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Возвращаем true
    return true;
?>
