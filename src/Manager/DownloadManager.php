<?php


namespace Forseti\Bot\Firjan\Manager;

use

use Psr\Http\Message\ResponseInterface;
use Forseti\Bot\Firjan\Traits\ForsetiLoggerTrait;
use Forseti\Bot\Firjan\Factory\GuzzleClientFactory;
final class DownloadManager
{
    use ForsetiLoggerTrait;
    private $client;
    private $resp;
    public function __construct(ResponseInterface $response)
    {
        $this->client =  GuzzleClientFactory::getInstance();
        $this->resp = $response;
    }
    public function saveTo($dir, $processName, $anexoType)
    {
        $processName = $this->formatName($processName);
        try {
            if (!is_dir($dir.'/'.$processName)) {
                mkdir($dir.'/'.$processName);
            }
            $filepath = $this->formatPath($dir.'/'.$processName, $anexoType);
            $this->resp->getBody()->rewind();
            while (!$this->resp->getBody()->eof()) {
                file_put_contents($filepath, $this->resp->getBody()->read(2133), FILE_APPEND);
            }
            return new \SplFileInfo($filepath);
        } catch (\Exception $e) {
            $this->error('Erro ao salvar', ['diretorio' => $dir, 'processo' => $processName]);
            return null;
        } finally {
            $this->resp->getBody()->close();
        }
    }
    private function formatPath($dir, $nameContent)
    {
        preg_match('#filename=(.*)#', $this->resp->getHeader('Content-Disposition')[0], $m);
        $nameFile = $nameContent.'_'.$m[1];
        $filepath = $dir . DIRECTORY_SEPARATOR . $nameFile;
        return preg_replace('#[\\\|/]+#', DIRECTORY_SEPARATOR, $filepath);
    }
    private function formatName($name)
    {
        $formatName = explode('/', $name);
        $formatName = $formatName[0] . $formatName[1];
        $formatName = explode(' ', $formatName);
        $newName = $formatName[0].$formatName[1].$formatName[2];
        return $newName;
    }
}
