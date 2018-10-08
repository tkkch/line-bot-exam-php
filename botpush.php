<?php



require "vendor/autoload.php";

$access_token = 'dgKDSMyshkd4gM6/V/Rq2bLBY22Pt1g+VqdujDwlwqY47vlYZVk1pKdFjFkd0E/JcMhQSD38da9Heb83aeAHiRtZUjRLIgL33hpU8aoMW4niITIzrRKCpjhhK1xMoIFgfPcirrLBIHtYI0OB0puZUQdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'f84abb118210a579c668c040bce4b972';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







