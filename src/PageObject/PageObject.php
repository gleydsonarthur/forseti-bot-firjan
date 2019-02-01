<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 22/01/19
 * Time: 09:27
 */

namespace Forseti\Bot\Firjan\PageObject;

class PageObject extends AbstractPageObject
{
    public function getPage()
    {
        $response = $this->client->get("https://portaldecompras.firjan.com.br/Default.aspx");

        return $response->getBody()->getContents();
    }

    public function postPage($id)
    {

    }

}