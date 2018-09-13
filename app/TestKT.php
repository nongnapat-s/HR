<?php

namespace App;

class TestKT
{
    public static function test($hn)
    {
        $url = env('KT_URL');                  // base_url + endpoint

        $ch = curl_init();                                  // Build the cURL session.
        curl_setopt($ch, CURLOPT_URL, $url);                // set url
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    // turn off peers SSL verification
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);               // set connection timeout = 2 seconds.
        curl_setopt($ch, CURLOPT_POST, true);               // use POST method
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['hn' => $hn, 'token' => env('KT_token')]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_PROXY, '');
        // curl_setopt($ch, CURLOPT_VERBOSE, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);

    }
}