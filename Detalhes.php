<?php

require_once "vendor/autoload.php";
use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\DetalhesPageObject;


$guz = new Client(['cookies' => true, 'verify' => false]);

$po = new DetalhesPageObject($guz);

$parser = $po->getDetalhes(2093)->getIterator();

print_r($parser);


/*    use Forseti\Bot\Firjan\PageObject\PageObject;

    $po = new PageObject(new Client());
    $po->getPage();

    var_dump($po->getPage());


$json = '{
   "dtoProcesso":{
      "nAnoFinalizacao":0,
      "tmpTipoMuralProcesso":0,
      "nCdModulo":18,
      "tmpTipoMuralVisao":9,
      "nCdSituacao":9,
      "nCdTipoProcesso":0,
      "nCdEmpresa":0,
      "sNrProcesso":"",
      "nCdProcesso":0,
      "sDsObjeto":"",
      "sOrdenarPor":"NCDPROCESSO",
      "sOrdenarPorDirecao":"DESC",
      "dtoPaginacao":{
         "nPaginaDe":1,
         "nPaginaAte":50
      },
      "dtoIdioma":{
         "nCdIdioma":1
      }
   }
}';

$params = json_decode($json, true);

$guz = new Client(['cookies' => true, 'verify' => false]);

$resp = $guz->request('POST', 'https://portaldecompras.firjan.com.br/portal/WebService/Servicos.asmx/PesquisarProcessos', [
    'json' => $params
]);

$html = $resp->getBody()->getContents();

var_dump(iconv("UTF-8", "ISO-8859-1//TRANSLIT", $html));
*/