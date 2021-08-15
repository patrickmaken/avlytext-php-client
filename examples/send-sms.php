<?php

include '../vendor/autoload.php';

use Patrickmaken\AvlyText\Client as AVTClient;

$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

$telephone = '+237699887766';
$text = 'This is a test message';
$senderID = 'MyApp';

$response = AVTClient::sendSMS($telephone, $text, $senderID, $api_key);
var_dump($response);