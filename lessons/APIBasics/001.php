<?php

require __DIR__ . '/../vendor/autoload.php';


// API (Application Programming Interface)
/*
$response = file_get_contents('https://randomuser.me/api');
echo $response;

$response = file_get_contents("https://example.com");
echo $response;
*/


$response = file_get_contents('https://randomuser.me/api');

$data = json_decode($response, true);

echo $data['results'][0]["name"]["first"];

dd($data);