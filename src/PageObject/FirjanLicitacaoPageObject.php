<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 01/02/19
 * Time: 11:23
 */

namespace Forseti\Bot\Firjan\PageObject;

use Forseti\Bot\Firjan\Parser\FirjanLicitacaoParser;

class FirjanLicitacaoPageObject extends AbstractPageObject
{
    const MODALIDADE_TODAS = 0;
    const MODALIDADE_PROCESSOS_PRESENCIAIS = 22;
    const MODALIDADE_PREGAO_ELETRONICO = 18;

    const SITUACAO_TODAS = 0;

    const PROCESSOS_PRESENCIAIS_AGENDADO = 2;
    const PROCESSOS_PRESENCIAIS_ANULADO = 9;
    const PROCESSOS_PRESENCIAIS_CANCELADO = 8;
    const PROCESSOS_PRESENCIAIS_DESERTO = 12;
    const PROCESSOS_PRESENCIAIS_EM_ANDAMENTO = 3;
    const PROCESSOS_PRESENCIAIS_EM_APROVACAO = 16;
    const PROCESSOS_PRESENCIAIS_EM_DISPUTA_DE_LANCE = 4;
    const PROCESSOS_PRESENCIAIS_EM_HOMOLOGACAO = 5;
    const PROCESSOS_PRESENCIAIS_FRACASSADO = 7;
    const PROCESSOS_PRESENCIAIS_HOMOLOGADO = 11;
    const PROCESSOS_PRESENCIAIS_HOMOLOGADO_COM_CONTRATO = 14;
    const PROCESSOS_PRESENCIAIS_HOMOLOGADO_COM_PEDIDO = 13;
    const PROCESSOS_PRESENCIAIS_HOMOLOGADO_COM_REGISTRO_DE_PRECO = 15;
    const PROCESSOS_PRESENCIAIS_REVOGADO = 6;
    const PROCESSOS_PRESENCIAIS_SUSPENSO = 10;

    const PREGAO_ELETRONICO_ABERTURA_DE_PROPOSTAS = 9;
    const PREGAO_ELETRONICO_AGENDADO_PUBLICADO = 1;
    const PREGAO_ELETRONICO_AGUARDANDO_LIBERACAO = 23;
    const PREGAO_ELETRONICO_AGUARDANDO_LIBERACAO_FINANCEIRA = 30;
    const PREGAO_ELETRONICO_AJUSTE_DE_PRECOS = 21;
    const PREGAO_ELETRONICO_ANULADO = 7;
    const PREGAO_ELETRONICO_CANCELADO = 6;
    const PREGAO_ELETRONICO_CLASSIFICACAO_DE_PROPOSTAS = 10;
    const PREGAO_ELETRONICO_CONTRARAZOES = 19;
    const PREGAO_ELETRONICO_DESERTO = 28;
    const PREGAO_ELETRONICO_EM_AJUDIACAO = 22;
    const PREGAO_ELETRONICO_EM_APROVACAO = 37;
    const PREGAO_ELETRONICO_EM_DISPUTA_DE_LANCES = 11;
    const PREGAO_ELETRONICO_EM_HOMOLOGACAO_PARCIAL = 35;
    const PREGAO_ELETRONICO_EM_PROPOSTA = 2;
    const PREGAO_ELETRONICO_ENCERRAMENTO_DA_SESSAO_PUBLICA = 16;
    const PREGAO_ELETRONICO_FINANCEIRO_LIBERADO = 31;
    const PREGAO_ELETRONICO_FRACASSADO = 29;
    const PREGAO_ELETRONICO_HOMOLOGADO = 24;
    const PREGAO_ELETRONICO_HOMOLOGADO_EM_CONTRATO = 36;
    const PREGAO_ELETRONICO_HOMOLOGADO_COM_PEDIDO = 33;
    const PREGAO_ELETRONICO_HOMOLOGADO_COM_REGISTRO_DE_PRECO = 34;
    const PREGAO_ELETRONICO_INTENCAO_DE_RECURSOS = 15;
    const PREGAO_ELETRONICO_JULGAMENTO_DAS_INTENCOES = 17;
    const PREGAO_ELETRONICO_JULGAMENTO_DOS_RECURSOS = 20;
    const PREGAO_ELETRONICO_NEGOCIACAO_HABILITACAO_ACEITABILIDADE = 14;
    const PREGAO_ELETRONICO_PRAZO_DE_PROPOSTAS_PRORROGADO = 3;
    const PREGAO_ELETRONICO_RECURSOS = 18;
    const PREGAO_ELETRONICO_RECURSOS_CONTRA_RAZOES = 25;
    const PREGAO_ELETRONICO_REVOGADO = 8;
    const PREGAO_ELETRONICO_SESSAO_PUBLICA_ENCERRADA = 26;
    const PREGAO_ELETRONICO_SUSPENSO = 4;

    private $modalidade = self::MODALIDADE_TODAS;
    private $situacao = self::SITUACAO_TODAS;

    public function byModalidade($modalidade)
    {
        $this->modalidade = $modalidade;

        return $this;
    }

    public function bySituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    public function post()
    {
        $resp = $this->client->request('POST', 'https://portaldecompras.firjan.com.br/Portal/WebService/Servicos.asmx/PesquisarProcessos',
            [

                "json" => [
                    "dtoProcesso" => [
                        "nAnoFinalizacao"=> 0,
                        "tmpTipoMuralProcesso" => 0,
                        "nCdModulo" => 18,
                        "tmpTipoMuralVisao" => 0,
                        "nCdSituacao" => 0,
                        "nCdTipoProcesso" => 0,
                        "nCdEmpresa" => 0,
                        "sNrProcesso"=> "",
                        "nCdProcesso" => 0,
                        "sDsObjeto" =>"",
                        "sOrdenarPor" => "NCDPROCESSO",
                        "sOrdenarPorDirecao" => "DESC",
                        "dtoPaginacao" => [
                            "nPaginaDe" => 1,
                            "nPaginaAte" => 50
                        ],
                        "dtoIdioma" => ["nCdIdioma" => 1]
                    ]
                ]
            ]);

        return new FirjanLicitacaoParser($resp->getBody()->getContents());
    }

}