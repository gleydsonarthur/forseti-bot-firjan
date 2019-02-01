<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 31/01/19
 * Time: 10:25
 */

namespace Forseti\Bot\Firjan\Parser;
use Forseti\Bot\Firjan\Iterator\FirjanLicitacaoIterator;


class FirjanLicitacaoParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new FirjanLicitacaoIterator($this->getJsonAsArray());
    }
}