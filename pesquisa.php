<?php

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\PesquisaPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;
use Forseti\Bot\Firjan\Parser\DetalhesParser;

$po = new PesquisaPageObject();

$poDetalhes = new \Forseti\Bot\Firjan\PageObject\DetalhesPageObject();

$parser = $po->byModalidade(PesquisaPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(PesquisaPageObject::PREGAO_ELETRONICO_EM_PROPOSTA)->post();

//var_dump($po->post()->getJsonAsArray());
//exit;
$licitacoes = $po->post()->getIterator();


foreach ($licitacoes as $licitacao) {
    $parser = $poDetalhes->getDetalhes($licitacao['codigo']);

    echo "-------------------------------------------------------------------------------------------------" . "\n \n";

    print_r('Firjan' . "")



    //var_dump($licitacoes);

}
