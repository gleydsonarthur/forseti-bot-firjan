<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 11/02/19
 * Time: 11:58
 */


require_once "vendor/autoload.php";
use GuzzleHttp\Client;

use Forseti\Bot\Firjan\PageObject\DetalhesItemPageObject;


$client = new Client(['cookies' => true]);

$response = $client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/AnexoExiste',[

    'json' => [
        'dtoAnexo'=> [
            "sNmLocalAnexo" => "EditalAnexos",
            "sNmArquivo" => "wbc201902071628584451584.pdf"
        ]
    ],


]);

var_dump($response->getBody()->getContents());