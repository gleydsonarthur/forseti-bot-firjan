<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 12:08
 */

namespace Forseti\Bot\Firjan\Parser;

use Forseti\Bot\Firjan\Utils\Functions;

class DetalhesParser extends AbstractJsonParser
{
    public function getCodigoProcesso()
    {
        return $this->data['nCdProcesso'];
    }

    public function  getNumeroProcesso()
    {
        return $this->data['sNrProcesso'];
    }

    public function getOrgaoNome()
    {
        return $this->data['sNmEmpresa'];
    }

    public function getModalidade()
    {
        return $this->data['sNmModalidade'];
    }

    public function getDataPublicacao()
    {
        return Functions::format($this->data['tDtPublicacao']);
    }

    public function getDataInicioProposta()
    {
        return Functions::format($this->data['tDtInicial']);
    }

    public function getDataLimiteEntrega()
    {
        return Functions::format($this->data['tDtFinal']);
    }

    public function getTxtObjeto()
    {
        return $this->data['sDsObjeto'];
    }

    //parsear o restante das informações conforme documentação
}

