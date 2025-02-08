<?php
var_dump($_POST);

try {
    $name = $_POST['name'];
    $commentary = $_POST ['commentary'];
    $email = $_POST ['email'];
    $yourtown = $_POST ['yourtown'];


    } catch (\Throwable $th) {
        $name = "ERROR IN MESSAGE";
        $commentary = "ERROR IN MESSAGE";
        $email = "ERROR IN MESSAGE";
        $yourtown = "ERROR IN MESSAGE";
    }

    $token = "7648294271:AAGT9A4hGfJ8K0uxPoCYgglA2axu_2igaqg";
    $chat_id = 5257257463;


    $name = urlencode("$name");
    $commentary = urlencode("$commentary");
    $email = urlencode("$email");
    $yourtown = urlencode("$yourtown");

    $urlQueary = "https://api.telegram.org/bot". $token . "/sendMessage?chat_id=". $chat_id ."&text=" .
    "<b>Текстова відправка форми</b>" . "%0A%0A" .
    "<b>Ваше ім'я: </b><i>$name</i>" . "%0A" .
    "<b>Текст: </b><i>$commentary</i>" . "%0A" .
    "<b>Email: </b><i>$email</i>" . "%0A" .
    "<b>Ваше місто: </b><i>$yourtown</i>" . "%0A";

    $urlQueary .= "&parse_mode=HTML";
    $result = file_get_contents($urlQueary);
    ?>