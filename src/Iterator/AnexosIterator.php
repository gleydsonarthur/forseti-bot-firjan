<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 12/03/19
 * Time: 12:14
 */

namespace Forseti\Bot\Firjan\Iterator;


class AnexosIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetGet($this->key());

        return [
            'nmArquivo' => $current['sDsAnexo'],
            'paramToDownload' => str_replace('?q=', '', $current['sDsParametroCriptografado'])
        ];
    }
}

