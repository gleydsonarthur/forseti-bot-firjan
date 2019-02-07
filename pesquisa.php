<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 15:22
 */
require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\FirjanPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new FirjanPageObject($guz);

$parser = $po->byModalidade(FirjanPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(FirjanPageObject::PREGAO_ELETRONICO_EM_PROPOSTA);

$licitacoes = $po->post()->getIterator();

$poDetalhes = new FirjanPageObject($guz);

foreach ($licitacoes as $licitacao) {

    $parserDetalhes = $poDetalhes->getDetalhes($licitacao['codigo']);
    var_dump($parserDetalhes->getIterator());

}