
require_once "vendor/autoload.php";


use GuzzleHttp\Client;
use Forseti\Bot\Firjan\PageObject\DetalhesItemPageObject;



$po = new DetalhesItemPageObject(new Client());

print_r($po->getdetalhesItem());
