<?php
$access_token = 'XgXDeNlyF1jATPCD/+17uKAGWdP88xhSOw6G7J5wUpC3w7B6WcjQF45HACtqC2NHA2ng8XyxUwCwyjfjkJ3SYHyMf55Gwez6OPlDNM6LY5UrNJJvSHQtdET1YVMSES7WUrNn9shvfEW7lGitTzGfjAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;