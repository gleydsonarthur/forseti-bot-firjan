<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 10:21
 */

namespace Forseti\Bot\Firjan\Iterator;


class ResumoEditalIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetGet($this->key());

        return [
            'codigo' => $current['nCdProcesso'],
            'modalidade' => $current['sNmModalidade'],
            'situacao' => $current['sDsSituacao'],
        ];
    }
}