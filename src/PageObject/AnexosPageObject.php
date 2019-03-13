<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 12/03/19
 * Time: 11:06
 */

namespace Forseti\Bot\Firjan\PageObject;


use Forseti\Bot\Firjan\Parser\AnexosParser;

class AnexosPageObject extends AbstractPageObject
{
    public function postPesquisarAnexos($ncdAnexo, $idPortal)
    {
        $response = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarAnexos', [
           'json' => [
               'dtoAnexo' => [
                   'nCdAnexo' => $ncdAnexo,
                   'sNmLocalAnexo' => 'EditalAnexos',
                   'nCdModulo' => 18,
                   'nCdOrigem' => $idPortal,
               ]
           ]
        ]);

        return new AnexosParser($response->getBody()->getContents());
    }

    public function getDownloadAnexos($paramToDownload)
    {
        $response = $this->client->request('GET', 'https://portaldecompras.firjan.com.br/Portal/Download.aspx', [
           'query' => [
               'q' => $paramToDownload,
           ]
        ]);

        return $response->getBody()->getContents();
    }
}