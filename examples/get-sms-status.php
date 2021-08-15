<?php

include '../vendor/autoload.php';

use Patrickmaken\AvlyText\Client as AVTClient;

$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

$message_id = '0a069c28-1e75-4ad5-a352-ab02db2be1df';

$response = AVTClient::getMessageStatus($message_id, $api_key);
var_dump($response);