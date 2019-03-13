<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 12/03/19
 * Time: 14:46
 */

namespace Forseti\Bot\Firjan\Traits;

use Psr\Log\LoggerTrait;
use Forseti\Logger\Logger;

trait ForsetiLoggerTrait
{
    use LoggerTrait;

    public function log($level, $message, array $context = array())
    {
        return (new Logger(get_class($this)))->log($level, $message, $context);
    }
}