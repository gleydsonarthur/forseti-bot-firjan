<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 12:08
 */

namespace Forseti\Bot\Firjan\Parser;

class DetalhesParser extends AbstractJsonParser
{
    public function getNumeroProcesso()
    {
        return $this->data['sNrProcesso'];
    }

    public function getTxtObjeto()
    {
        return $this->data['sDsObjeto'];
    }

    public function getParamAnexoToDownload()
    {
        return $this->data['nCdAnexo'];
    }

    //parsear o restante das informações conforme documentação
}