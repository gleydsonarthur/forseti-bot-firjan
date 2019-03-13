<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 12/03/19
 * Time: 11:40
 */

namespace Forseti\Bot\Firjan\Parser;


use Forseti\Bot\Firjan\Iterator\AnexosIterator;

class AnexosParser extends AbstractJsonParser
{
    public function getAnexosIterator()
    {
        return new AnexosIterator($this->getJsonAsArray());
    }
}
