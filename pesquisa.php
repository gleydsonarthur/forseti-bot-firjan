<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 15:22
 */
require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\PesquisaPageObject;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;

$po = new PesquisaPageObject();

$po->byModalidade(PesquisaPageObject::MODALIDADE_PREGAO_ELETRONICO)->bySituacao(PesquisaPageObject::PREGAO_ELETRONICO_EM_PROPOSTA);

//var_dump($po->post()->getJsonAsArray());

//exit;
$licitacoes = $po->post()->getIterator();


foreach ($licitacoes as $licitacao) {

    var_dump($licitacao['codigo']);

}
