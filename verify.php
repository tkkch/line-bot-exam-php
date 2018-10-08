<?php
$access_token = 'zn2Khigl7hfHJ1NAlO9aM1sVrDS/VEhUSMeLJlRtr4uQTDSZ0U00g/8Rjm1WmPJhcMhQSD38da9Heb83aeAHiRtZUjRLIgL33hpU8aoMW4n7/zujWzovJ1M1r2alPkRwGD6jA5FAYe1MbELBHlf7ZAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v4/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;