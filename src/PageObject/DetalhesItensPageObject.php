<?php

namespace Forseti\Bot\Firjan\PageObject;
use Forseti\Bot\Firjan\Parser\DetalhesItensParser;


class DetalhesItensPageObject extends AbstractPageObject
{
    public function getdetalhesItem($idPortal)
    {
        $response = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarProcessoDetalheItemProduto', [
            'json' =>
                [
                    "dtoProcesso" => [
                        "nCdProcesso" => $idPortal,
                            "nCdModulo" => 18,
                              "nCdLote" => 0,
                          "nCdSituacao" => 2,
                        "dtoIdioma" => ["nCdIdioma" => 1]]]

        ]);
        return new DetalhesItensParser($response->getBody()->getContents());
     }


}
