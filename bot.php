<?php


define('BOT_TOKEN', '8082164762:AAE6bumpUY2soEy3MthSxhae6qZHrtU2rs0');//INIT BOT TOKEN
define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');//DEFINE APP API URL OR TELEGRAM API URL


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
    $text = 'You Say ' . $update['message']['text'];

    sendMessage($chatID, $text);
}//end if


    $chatID = $update['message']['chat']['id'];
    $text = 'You Say ' . $update['message']['text'];
sendMessage($chatID, $text);
