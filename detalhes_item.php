<?php

require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\DetalhesItemPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

$poDetalhesItem = new DetalhesItemPageObject($guz);

$licitacoes = $poDetalhesItem->getdetalhesItem()->getIterator();

foreach ($licitacoes as $licitacoe) {
    $poDetalhesItem = $poDetalhesItem->getdetalhesItem();

    print_r($poDetalhesItem->getIterator());

}