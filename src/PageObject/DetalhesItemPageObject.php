<?php

namespace Forseti\Bot\Firjan\PageObject;
use Forseti\Bot\Firjan\Parser\DetalhesItensParser;


class DetalhesItemPageObject extends AbstractPageObject
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
/*
        $json =
            '{
             "dtoProcesso":
             {
                "nCdProcesso":2067,
                "nCdModulo":18,
                "nCdLote":0,
                "nCdSituacao":2,
                "dtoIdioma":
                {
                    "nCdIdioma":1
                }
            } 
        }';

        $params = json_decode($json, true);

        $response = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarProcessoDetalheItemProduto', [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);

        //iconv("UTF-8", "ISO-8859-1//TRANSLIT", $html);



    }

}
*/