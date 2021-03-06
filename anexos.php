<?php

require_once __DIR__ . '/vendor/autoload.php';

use Forseti\Bot\Firjan\PageObject\AnexosPageObject;

$po = new AnexosPageObject();

$parser = $po->postPesquisarAnexos('102902', '2133');

$paramAnexos = $parser->getAnexosIterator();

foreach ($paramAnexos as $paramAnexo) {

    $nmArquivo = $paramAnexo['nmArquivo'];
    $paramToDownload = $paramAnexo['paramToDownload'];

    $download = $po->getDownloadAnexos($paramToDownload);

    file_put_contents(__DIR__. '/anexos/'.$nmArquivo, $download);
}
