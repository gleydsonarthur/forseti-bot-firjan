<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 15:22
 */
require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\FirjanPesquisaPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;

$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new FirjanPesquisaPageObject($guz);

$parser = $po->byModalidade(FirjanPesquisaPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(FirjanPesquisaPageObject::PREGAO_ELETRONICO_EM_PROPOSTA);

$licitacoes = $po->post()->getIterator();

$poDetalhes = new FirjanPesquisaPageObject($guz);

foreach ($licitacoes as $licitacao) {

    $parserDetalhes = $poDetalhes->getDetalhes($licitacao['codigo']);
    var_dump($parserDetalhes->getIterator());

}