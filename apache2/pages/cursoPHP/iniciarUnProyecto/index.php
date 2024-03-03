<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode() . '<br>'; // 200
echo $response->getHeaderLine('content-type') . '<br>'; // 'application/json; charset=utf8'
var_dump($response->getBody()); // '{"id": 1420053, "name": "guzzle", ...}'
