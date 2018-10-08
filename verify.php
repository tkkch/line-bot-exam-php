<?php
$access_token = 'dgKDSMyshkd4gM6/V/Rq2bLBY22Pt1g+VqdujDwlwqY47vlYZVk1pKdFjFkd0E/JcMhQSD38da9Heb83aeAHiRtZUjRLIgL33hpU8aoMW4niITIzrRKCpjhhK1xMoIFgfPcirrLBIHtYI0OB0puZUQdB04t89/1O/w1cDnyilFU=';



$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;