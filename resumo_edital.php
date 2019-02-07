<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 15:14
 */

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\ResumoEditalPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new ResumoEditalPageObject(($guz));

var_dump($po->getResumoEdital(2093)->getJasonAsArray());

