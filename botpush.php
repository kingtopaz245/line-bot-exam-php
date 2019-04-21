<?php



require "vendor/autoload.php";

$access_token = 'M4mAJN2BU9ek+Lc3NtgBA6dZeZr7YH0MoEqe8fD0u/uR+zejOJ2Rqry/KAjvvcNtDpLFRf6bvuvJjf9OjmpnXO45PfhEPqXQ8Y/i/3ZAcS+yC0U1kFx0QKB06nYbXU5Yi2bf6JHiR0o3zP+NLw610wdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9facae947f03d453b7bb5557973f14bc';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







