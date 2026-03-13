<?php
try {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $theme = $_POST['theme'];
    $text = $_POST['text'];
} catch(\Throwable $th) {
    $name = 'error';
    $phone = 'error';
    $theme = 'error';
    $text = 'error';
}

$token = "8478939539:AAF-og95Tybt8dFTv4yYOUneT9DebT-XZfo";
$chat_id = "5360123260";

$name = urldecode($name);
$phone = urldecode($phone);
$theme = urldecode($theme);
$text = urldecode($text);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=". $textMessage;
"<b>ім’я:</b> $name" . "/n" .
"<b>Телефон:</b> $phone" . "/n" .
"<b>Тема повідомлення:</b> $theme" . "/n" .
"<b>Текст:</b> $text" . "/n" .

$urlQuery .= "&parse_mode=HTML";

$result = file_get_contents($urlQuery);
?>