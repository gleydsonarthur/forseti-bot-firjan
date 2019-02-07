<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 10:19
 */

namespace Forseti\Bot\Firjan\Iterator;


class DetalhesIterator extends \ArrayIterator
{
    public function curent()
    {
        $current = $this->offsetGet($this->key());

        return [
            'codigo' => $current['nCdProcesso'],
            'modalidade' => $current['sNmModalidade'],
            'situacao' => $current['sDsSituacao'],
        ];
    }
}