<?php
try {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
} catch(\Throwable $th) {
    $name = 'error';
    $phone = 'error';
}

$token = "8478939539:AAF-og95Tybt8dFTv4yYOUneT9DebT-XZfo";
$chat_id = "5360123260";

$name = urldecode($name);
$phone = urldecode($phone);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=". $textMessage;
"<b>ім’я:</b> $name" . "/n" .
"<b>Телефон:</b> $phone" . "/n" .

$urlQuery .= "&parse_mode=HTML";

$result = file_get_contents($urlQuery);
?>