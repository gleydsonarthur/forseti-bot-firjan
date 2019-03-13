<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 10:15
 */

namespace Forseti\Bot\Firjan\Iterator;


class DetalhesItensIterator extends \ArrayIterator
{
    public function current()
    {
        $current = $this->offsetget($this->key());

        return [
            'nmItem' => $current['sDsItem'],
            'qtdItem' => $current['dQtItem'],
            //parsear o restante das informações conforme documentação
        ];
    }
}