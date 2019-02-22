<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 11:16
 */

namespace Forseti\Bot\Firjan\Parser;
use Forseti\Bot\Firjan\Iterator\ResumoEditalIterator;


class ResumoEditalParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new ResumoEditalIterator($this->getJsonAsArray());
    }
}