<?php



require "vendor/autoload.php";

$access_token = 'zn2Khigl7hfHJ1NAlO9aM1sVrDS/VEhUSMeLJlRtr4uQTDSZ0U00g/8Rjm1WmPJhcMhQSD38da9Heb83aeAHiRtZUjRLIgL33hpU8aoMW4n7/zujWzovJ1M1r2alPkRwGD6jA5FAYe1MbELBHlf7ZAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0d0809d162ce61750f2a1dac4da3eac2';

//$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







