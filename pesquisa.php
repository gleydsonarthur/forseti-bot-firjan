<?php

require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\PesquisaPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;
use Forseti\Bot\Firjan\Parser\DetalhesParser;

$po = new PesquisaPageObject();

$poDetalhes = new \Forseti\Bot\Firjan\PageObject\DetalhesPageObject();

$parser = $po->byModalidade(PesquisaPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(PesquisaPageObject::PREGAO_ELETRONICO_ABERTURA_DE_PROPOSTAS)->post();

//var_dump($po->post()->getJsonAsArray());
//exit;
$licitacoes = $po->post()->getIterator();


foreach ($licitacoes as $licitacao) {
    $parser = $poDetalhes->getDetalhes($licitacao['codigo']);

    echo "-------------------------------------------------------------------------------------------------" . "\n \n";

    print_r('Firjan' . "\n");
    print_r('Código ' . $parser-> getNumeroProcesso() . "\n");
    print_r('Órgão: ' . $parser->getOrgaoNome() . "\n");
    print_r('Modalidade ' . $parser->getModalidade() . "\n");
    print_r('Data de publicação ' . $parser->getDataPublicacao() . "\n");
    print_r('Data limite de entrega: ' . $parser->getDataLimiteEntrega() . "\n");




    //var_dump($licitacoes);

}
