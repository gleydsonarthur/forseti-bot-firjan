<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 22/01/19
 * Time: 11:59
 */

namespace Forseti\Bot\Firjan\Parser;

class AbstractJsonParser
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    public function getJsonAsArray()
    {
        return json_decode($this->json,true)['d'];
    }
}