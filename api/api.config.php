<?php

header("Access-Control-Allow-Origin: " . "https://spoilerroom.net");

$headers = "Content-Type";
$methods = "GET";

header("Access-Control-Allow-Headers: " . $headers);
header("Access-Control-Allow-Methods: " . $methods);
header("Content-Type: application/json");

date_default_timezone_set("America/Los_Angeles");

function response($message, $data)
{
    $response['message'] = $message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}

$root = dirname(__DIR__);
set_include_path($root);

require_once 'data.php';
