<?php

require_once "vendor/autoload.php";

use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;

$po = new DetalhesPageObject();

$parser = $po->getDetalhes(1978);

print_r('Firjan');

var_dump($parser->getJsonAsArray()); exit;



