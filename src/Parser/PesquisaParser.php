<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 31/01/19
 * Time: 10:25
 */

namespace Forseti\Bot\Firjan\Parser;
use Forseti\Bot\Firjan\Iterator\PesquisaIterator;
use Forseti\Bot\Firjan\Utils\Functions;


class PesquisaParser extends AbstractJsonParser
{
    public function getIterator()
    {
        return new PesquisaIterator($this->getJsonAsArray());
    }

    public function getCodigoProcesso()
    {
        return $this->data['nCdProcesso'];
    }

    public function getNumeroProcesso()
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
        return Functions::format($this->data['tDtInicial']);
    }

    public function getDataLimiteEntrega()
    {
        return Functions::format($this->data['tDtFinal']);
    }
}
