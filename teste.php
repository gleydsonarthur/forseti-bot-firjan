
<?php

require_once "vendor/autoload.php";

use Forseti\Bot\Firjan\PageObject\teste;

$po = new teste();


$parser = $po->getTeste()->getIterator();

var_dump($parser);


