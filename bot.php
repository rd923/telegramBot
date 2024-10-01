<?php

define('BOT_TOKEN', '');//INIT BOT TOKEN
define('API_URL', '');//DEFINE APP API URL OR TELEGRAM API URL

function sendMessage($chatID, $text)
{
    $url = API_URL . 'sendMessage?chat_id=' . $chatID . '&text=' . urlencode($text);

    file_get_contents($url);
}//end send message func.

//Get The Incoming update
$update = json_decode(file_get_contents('php://input'), true);

//Check Is Update Content Message

if (isset($update['message']))
{
    $chatID = $update['message']['chat']['id'];
    $text = $update['message']['text'];

    sendMessage($chatID, $text);
}//end if