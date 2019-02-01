<?php

namespace Forseti\Bot\Firjan\PageObject;
use GuzzleHttp\Client;


class DetalhesPageObject extends AbstractPageObject
{

    public function getDetalhes()
    {


        $json = '{
                    "dtoProcesso":
                    {
                        "nCdProcesso":2067,
                        "nCdModulo":18,
                        "nCdSituacao":2,
                        "tmpTipoMuralProcesso":0,
                        "dtoIdioma":
                        {
                            "nCdIdioma":1
                        }
                        
                    }
                }';


        $params = json_decode($json, true);

        $response = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarProcessoDetalhes', [
            'json' => $params
        ]);


        return json_decode($response->getBody()->getContents(), true);

        //return iconv("UTF-8", "ISO-8859-1//TRANSLIT", $html);
    }
}