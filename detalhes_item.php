<?php

require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\DetalhesItemPageObject;

$guz = new Client(
    ['cookies' => new \GuzzleHttp\Cookie\FileCookieJar(__DIR__.'/default.txt'), 'verify' => false]);

use Forseti\Bot\Firjan\PageObject\FirjanPesquisaPageObject;

$poPesquisa = new FirjanPesquisaPageObject($guz);

$guz->get('https://portaldecompras.firjan.com.br/Portal/Mural.aspx');

$parser = $poPesquisa->post();

var_dump($parser->getJsonAsArray()); exit;
$poDetalhesItem = new DetalhesItemPageObject($guz);

$licitacoes = $poDetalhesItem->getdetalhesItem('3610')->getIterator();


foreach ($licitacoes as $licitacao) {
    $poDetalhesItem = $poDetalhesItem->getdetalhesItem();

    print_r($poDetalhesItem->getIterator());

}