<?php

require_once "vendor/autoload.php";

use Forseti\Bot\Firjan\PageObject\DetalhesItensPageObject;

$poDetalhesItem = new DetalhesItensPageObject();

$itens = $poDetalhesItem->getdetalhesItem('2133')->getIterator();

foreach ($itens as $item) {
    var_dump($item);
}
