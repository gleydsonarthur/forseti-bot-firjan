<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 22/01/19
 * Time: 11:59
 */

namespace Forseti\Bot\Firjan\Parser;

Abstract class AbstractJsonParser
{
    private $json;
    protected $data;

    public function __construct($json)
    {
        $this->json = $json;
        $this->data = json_decode($this->json,true)['d'];
    }

    public function getJsonAsArray()
    {
        return $this->data;
    }
}