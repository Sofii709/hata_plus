<?php
try {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $theme = $_POST['theme'];
    $textM = $_POST['comment'];
    $allow = $_POST['allow'];
} catch(\Throwable $th) {
    $name = 'error';
    $phone = 'error';
    $theme = 'error';
    $textM = 'error';
    $allow = 'error';
}

$token = "8478939539:AAF-og95Tybt8dFTv4yYOUneT9DebT-XZfo";
$chat_id = 5360123260;

$name = urldecode($name);
$phone = urldecode($phone);
$theme = urldecode($theme);
$textM = urldecode($textM);
$allow = urldecode($allow);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=".
"<b>ім’я:</b> $name" . "%0A" .
"<b>Телефон:</b> $phone" . "%0A" .
"<b>Тема повідомлення:</b> $theme" . "%0A" .
"<b>Текст:</b> $textM" . "%0A";

if($allow) {
    $text .= "<b>Перевірка данних:</b> $allow";
}

$urlQuery .= "&parse_mode=HTML";

$result = file_get_contents($urlQuery);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="black_bg"></div>
    <header>
        <div class="head_line flex-between">
            <div class="gap menu">
                <nav>
                    <ul id="menu" class="flex-between nav">
                        <li id="cancel"><a href="javascript:void(0)">X</a></li>
                        <li><a href="index.html">Головна</a></li>
                        <li><a href="index.html">Про компанію</a></li>
                        <li>
                            <a id="btn" href="hata_prise.html">Наші будівлі</a>
                            <ul id='submenu' class="submenu">
                                <li><a href="hata_prise.html">Таунхауси</a></li>
                                <li><a href="hata_prise.html">Пентхауси</a></li>
                                <li><a href="hata_prise.html">Котеджі</a></li>
                                <li><a id="subbtn" href="hata_prise.html">Собачі будки</a>
                                    <ul id='subsubmenu' class="subsubmenu">
                                        <li><a href="hata_prise.html">Елітні будки</a></li>
                                        <li><a href="hata_prise.html">Для чіхуахуа</a></li>
                                        <li><a href="hata_prise.html">Вольєри</a></li>
                                        <li><a href="hata_prise.html">Халабуди</a></li>
                                        <li><a href="javascript:void(0)" id="cancelsubsub">x</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)" id="cancelsub">x</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">Акції</a></li>
                        <li><a href="hata_contacts.html">Контакти</a></li>
                    </ul>
                </nav>
                <div class="media">
                    <div>
                        <a href="#">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 19" width="10"
                                height="19">
                                <path class="a"
                                    d="m2.7 18.2h3.3v-8h2.6l0.4-3.2h-3v-2.2q0-0.8 0.3-1.1 0.3-0.5 1.3-0.5h1.7v-2.8q-1-0.2-2.5-0.2-1.8 0-3 1.2-1.1 1.1-1.1 3.1v2.5h-2.7v3.2h2.7z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" width="18"
                                height="15">
                                <path class="a"
                                    d="m16.1 3.6q1.1-0.8 1.9-1.9-1.1 0.4-2.1 0.6 1.2-0.8 1.6-2.1-1.1 0.7-2.3 0.9-0.6-0.5-1.3-0.8-0.6-0.4-1.5-0.4-0.9 0-1.8 0.5-0.8 0.5-1.3 1.4-0.5 0.8-0.5 1.8 0 0.5 0.1 0.9-2.3-0.1-4.3-1.2-2-1-3.3-2.7-0.6 0.9-0.6 1.9 0 0.9 0.5 1.7 0.5 0.8 1.2 1.4-0.9-0.1-1.7-0.5 0 1.3 0.9 2.4 0.8 1 2.1 1.3-0.5 0.1-1 0.1-0.3 0-0.7-0.1 0.4 1.1 1.3 1.8 1 0.8 2.2 0.8-2.1 1.5-4.6 1.5-0.5 0-0.9 0 2.6 1.7 5.7 1.7 3.2 0 5.7-1.7 2.3-1.5 3.5-4 1.3-2.3 1.3-4.8 0-0.4-0.1-0.5z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19" width="19"
                                height="19">
                                <path class="a"
                                    d="m9.2 4.4q1.3 0 2.3 0.6 1.1 0.7 1.8 1.8 0.6 1.1 0.6 2.3 0 1.3-0.6 2.4-0.7 1.1-1.8 1.7-1 0.6-2.3 0.6-1.3 0-2.4-0.6-1.1-0.6-1.7-1.7-0.6-1.1-0.6-2.4 0-1.2 0.6-2.3 0.6-1.1 1.7-1.8 1.1-0.6 2.4-0.6zm0 7.8q1.3 0 2.2-0.9 0.9-0.9 0.9-2.2 0-1.2-0.9-2.1-0.9-1-2.2-1-1.3 0-2.2 1-0.9 0.9-0.9 2.1 0 1.3 0.9 2.2 0.9 0.9 2.2 0.9zm6-8q0-0.4-0.3-0.8-0.3-0.3-0.8-0.3-0.4 0-0.8 0.3-0.3 0.4-0.3 0.8 0 0.5 0.3 0.8 0.4 0.3 0.8 0.3 0.5 0 0.8-0.3 0.3-0.3 0.3-0.8zm3.1 1.1q0.1 1.2 0.1 3.8 0 2.7-0.1 3.9 0 1.1-0.3 2-0.4 1-1.2 1.8-0.7 0.7-1.7 1.1-0.9 0.3-2.1 0.4-1.1 0-3.8 0-2.7 0-3.8 0-1.2-0.1-2.1-0.4-1-0.4-1.8-1.1-0.7-0.8-1.1-1.8-0.3-0.9-0.3-2-0.1-1.2-0.1-3.9 0-2.6 0.1-3.8 0-1.2 0.3-2 0.4-1.1 1.1-1.8 0.8-0.8 1.8-1.2 0.9-0.2 2.1-0.3 1.1-0.1 3.8-0.1 2.7 0 3.8 0.1 1.2 0.1 2.1 0.3 1 0.4 1.7 1.2 0.8 0.7 1.2 1.8 0.3 0.8 0.3 2zm-1.9 9.2q0.2-0.7 0.3-2.2 0-0.9 0-2.5v-1.3q0-1.7 0-2.6-0.1-1.5-0.3-2.2-0.5-1.3-1.8-1.8-0.7-0.2-2.2-0.3-0.9 0-2.6 0h-1.3q-1.6 0-2.5 0-1.5 0.1-2.2 0.3-1.3 0.5-1.8 1.8-0.2 0.7-0.3 2.2-0.1 0.9-0.1 2.6v1.3q0 1.6 0.1 2.5 0.1 1.5 0.3 2.2 0.5 1.3 1.8 1.8 0.7 0.2 2.2 0.3 0.9 0.1 2.5 0.1h1.3q1.7 0 2.6-0.1 1.5-0.1 2.2-0.3 1.3-0.5 1.8-1.8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div id="burger_container">
                <span id="burger"></span>
            </div>
        </div>
    </header>
    <main>
        <div class="fixed send wrapper">
            <h2>Дякуємо за реєстрацію</h2>
            <p>Перевірте дані</p>
            <ul>
                <li>ім’я- <?= $name ?></li>
                <li>Телефон- <?= $phone ?></li>
                <li>Тема повідомлення- <?= $theme ?></li>
                <li>Текст- <?= $textM ?></li>
            </ul>
            <a href="index.html">Повернутись на сторінку</a>
        </div>
    </main>
    <footer>
        <div class="wrap gap wrapper footer_line">
            <div class="about">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Будинки</a>
                        </li>
                        <li>
                            <a href="#">Інфраструктура</a>
                        </li>
                        <li>
                            <a href="#">Сервіс</a>
                        </li>
                        <li>
                            <a href="#">Новини</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="about">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Про компанію</a>
                        </li>
                        <li>
                            <a href="#">Страхування</a>
                        </li>
                        <li>
                            <a href="#">Контакти</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="phone flex-between">
                <div class="column-gap">
                    <p><a href="+380971002525"><img src="img/phone.svg" alt="phone"> +38(097) 100-25-25</a></p>
                    <p><a href="+380971002525">+38(097) 100-25-25</a></p>
                </div>
            </div>
            <div class="email column-gap">
                <p><a href="mailto:hataplus@hata.com.ua"><img src="img/email.svg" alt="email">hataplus@hata.com.ua</a>
                </p>
                <p><a href="skype:hataplus"><img src="img/skype.svg" alt="skype">hataplus</a></p>
            </div>
        </div>
        <div class="footer_bottom">
            <p>© Будівельна компанія “Хата Плюс” 2018.</p>
        </div>
    </footer>
    <script src="js/script.js">
        javascript: void(0)
    </script>
</body>
</html>