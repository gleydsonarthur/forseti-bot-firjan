<?php

namespace Forseti\Bot\Firjan\PageObject;

use Forseti\Bot\Firjan\Factory\GuzzleClientFactory;
use Forseti\Bot\Firjan\Traits\ForsetiLoggerTrait;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = GuzzleClientFactory::getInstance();
    }
}