<?php

require_once "vendor/autoload.php";


use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;



$po = new DetalhesPageObject(new Client());

print_r($po->getDetalhes());