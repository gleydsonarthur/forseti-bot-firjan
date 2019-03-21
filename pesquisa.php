<?php

require_once 'vendor/autoload.php';
use Forseti\Bot\Firjan\PageObject\PesquisaPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;
use Forseti\Bot\Firjan\Parser\testeParser;

$po = new PesquisaPageObject();

$poDetalhes = new \Forseti\Bot\Firjan\PageObject\DetalhesPageObject();

$parser = $po->byModalidade(PesquisaPageObject::MODALIDADE_PREGAO_ELETRONICO)->
bySituacao(PesquisaPageObject::PREGAO_ELETRONICO_EM_PROPOSTA)->post();

//var_dump($po->post()->getJsonAsArray());
//exit;
$licitacoes = $po->post()->getIterator();


foreach ($licitacoes as $licitacao) {
    $parser = $poDetalhes->getDetalhes($licitacao['codigo']);

    echo "-------------------------------------------------------------------------------------------------" . "\n \n";

    print_r('Firjan RJ ' . "\n");
    print_r('Código: ' . $parser-> getNumeroProcesso() . "\n");
    print_r('Órgão: ' . $parser->getOrgaoNome() . "\n");
    print_r('Modalidade: ' . $parser->getModalidade() . "\n");
    print_r('Data de início das propostas: ' . $parser->getDataInicioProposta() . "\n");
    print_r('Data término das propostas: ' . $parser->getDataLimiteEntrega() . "\n");
    print_r('Data de publicação: ' . $parser->getDataPublicacao() . "\n \n");
    print_r('Objeto: ' . $parser->getTxtObjeto() . "\n \n");




    //var_dump($licitacoes);

}
