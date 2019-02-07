<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 07/02/19
 * Time: 11:10
 */

namespace Forseti\Bot\Firjan\PageObject;
use Forseti\Bot\Firjan\Parser\ResumoEditalParser;


class ResumoEditalPageObject extends AbstractPageObject
{
    public function getResumoEdital($idPortal)
    {
        $response = $this->client->request('POST', '', [
            'json' =>
            [








            ]






        ]);
        return new ResumoEditalParser($response->getBody()->getContents());
    }
}