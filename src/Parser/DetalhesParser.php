<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 12:08
 */

namespace Forseti\Bot\Firjan\Parser;
use Forseti\Bot\Firjan\Iterator\DetalhesIterator;


class DetalhesParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new DetalhesIterator($this->getJsonAsArray());
    }
}