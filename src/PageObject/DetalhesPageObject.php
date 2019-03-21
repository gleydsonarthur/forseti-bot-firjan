<?php

namespace Forseti\Bot\Firjan\PageObject;

use Forseti\Bot\Firjan\Parser\DetalhesParser;


class DetalhesPageObject extends AbstractPageObject
{
    public function getDetalhes($idPortal)
    {
        $response = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarProcessoDetalhes', [
            'json' =>
                [
                    "dtoProcesso" => [
                        "nCdProcesso" => $idPortal,
                        "nCdModulo" => 18,
                        "nCdSituacao" => 2,
                        "tmpTipoMuralProcesso" => 0,
                        "dtoIdioma" => ["nCdIdioma" => 1]
                    ],
                ]
            ]);

            return new DetalhesParser($response->getBody()->getContents());
    }
}
