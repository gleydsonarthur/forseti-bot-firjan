<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 12/03/19
 * Time: 14:16
 */

namespace Forseti\Bot\Firjan\Factory;

use GuzzleHttp\Client;

class GuzzleClientFactory
{
    public static function getInstance($debug = false)
    {
        $config = [
            'debug' => $debug,
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36',
                //  'User-Agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'
            ]
        ];
        return new Client($config);
    }
}