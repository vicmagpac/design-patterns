<?php

class DescontoPorVendaCasada implements IDesconto
{
    private $proximoDesconto;

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }

    public function desconta(Orcamento $orcamento)
    {
        if (($this->existe('CANETA', $orcamento) && $this->existe('LAPIS', $orcamento))) {
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }

    private function existe($nomeDoItem, Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeDoItem) {
                return true;
            }
        }

        return false;
    }
}