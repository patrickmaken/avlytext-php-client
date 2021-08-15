<?php

namespace Patrickmaken\AvlyText;

class Client
{
    /**
     * @param string $messageId
     * @param string $apiKey
     * @throws \Exception
     * @return array
     */
    public static function getMessageStatus($messageId, $apiKey)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => sprintf('https://api.avlytext.com/v1/sms/%s?api_key=%s', $messageId, $apiKey),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        } else {
            $status_code = intval(curl_getinfo($curl, CURLINFO_RESPONSE_CODE));
        }
        curl_close($curl);

        if (isset($error_msg)) {
            throw new \Exception($error_msg);
        }
        if (isset($status_code) && !(200 <= $status_code && $status_code < 300)) {
            throw new \Exception(sprintf("http_code=%s; response=%s", $status_code, $response));
        }

        return json_decode($response, true);
    }

    /**
     * @param string $telephone
     * @param string $text
     * @param string|null $senderId
     * @param string $apiKey
     * @throws \Exception
     * @return array
     */
    public static function sendSMS($telephone, $text, $senderId, $apiKey)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => sprintf('https://api.avlytext.com/v1/sms?api_key=%s', $apiKey),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(array('sender' => $senderId, 'recipient' => $telephone, 'text' => $text)),
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        } else {
            $status_code = intval(curl_getinfo($curl, CURLINFO_RESPONSE_CODE));
        }
        curl_close($curl);

        if (isset($error_msg)) {
            throw new \Exception($error_msg);
        }
        if (isset($status_code) && !(200 <= $status_code && $status_code < 300)) {
            throw new \Exception(sprintf("http_code=%s; response=%s", $status_code, $response));
        }

        return json_decode($response, true);
    }
}