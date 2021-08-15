# AvlyText SMS API Client

PHP library for sending SMS in any country using AvlyText API. Visit [https://avlytext.com](https://avlytext.com "SMS Pro - Bulk SMS - A2P SMS") to create your account.

## Requirement

You need **php version >=5.5** to use this library

## Installation

```bash
composer require patrickmaken/avlytext-client
```

## Usage

Before any operation, you must get your api_key. This value are available in the "Developpers" menu of your customer panel on the platform: [https://www.avlytext.com/en/webapp/developers](https://www.avlytext.com/en/webapp/developers).

### Send SMS

```php
use Patrickmaken\AvlyText\Client as AVTClient;

$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

$telephone = '+237699887766';
$text = 'This is a test message';
$senderID = 'MyApp';

$response = AVTClient::sendSMS($telephone, $text, $senderID, $api_key);
var_dump($response);
```

Output:
```bash
array(6) {
  ["id"]=>
  string(36) "0a069c28-1e75-4ad5-a352-ab02db2be1df"
  ["from"]=>
  string(5) "MyApp"
  ["to"]=>
  string(13) "+237699887766"
  ["cost"]=>
  float(0.022)
  ["parts"]=>
  int(1)
  ["status"]=>
  string(7) "pending"
}
```

### Get SMS Status

```php
use Patrickmaken\AvlyText\Client as AVTClient;

$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

$message_id = '0a069c28-1e75-4ad5-a352-ab02db2be1df';

$response = AVTClient::getMessageStatus($message_id, $api_key);
var_dump($response);
```

Output:
```bash
array(6) {
  ["id"]=>
  string(36) "0a069c28-1e75-4ad5-a352-ab02db2be1df"
  ["from"]=>
  string(5) "MyApp"
  ["to"]=>
  string(13) "+237699887766"
  ["cost"]=>
  float(0.022)
  ["parts"]=>
  int(1)
  ["status"]=>
  string(9) "delivered"
}
```

## contacts
+ Email: [support@avlytech.com](mailto:support@avlytech.com)
