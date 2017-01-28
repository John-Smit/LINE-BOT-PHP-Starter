<?php
$access_token = 'gmU4BZfSb4RcmwoQ2Q84gy+Dww+QLeW9yucK/pRnJ6YpButMFnpRzMzPbZ9zlmPWA2ng8XyxUwCwyjfjkJ3SYHyMf55Gwez6OPlDNM6LY5Udf6huFwOPuqlBctlC7IxoFjgLQgPk2qDknBmlXxY1fgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;