<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'api.config.php';

header("Access-Control-Allow-Methods: POST");

$request = file_get_contents("php://input");
$payload = json_decode($request, true);

if ($payload['secret-key'] == $secretKey) {
    try {
        exec('cd ../ && git stash && git pull https://github.com/seanpierce/spoilerroom.net master');
        return response("Data pulled from git", true);
    } catch (Exception $exception) {
        return response("Oops", $exception);
    }
} else {
    return response("Unauthorized to make request", $secretKey);
}
