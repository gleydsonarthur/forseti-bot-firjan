<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 11:16
 */

namespace Forseti\Bot\Firjan\Parser;
use Forseti\Bot\Firjan\Iterator\DetalhesItensIterator;


class DetalhesItensParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesItensIterator($this->getJsonAsArray());
    }
}