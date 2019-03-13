<?php

require_once "vendor/autoload.php";

use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;

$po = new DetalhesPageObject();

$parser = $po->getDetalhes(1978);

var_dump($parser->getJsonAsArray()); exit;



