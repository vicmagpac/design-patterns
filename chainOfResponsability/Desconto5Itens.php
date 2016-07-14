<?php

class Desconto5Itens implements IDesconto
{
    private $proximoDesconto;

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }

    public function desconta(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }
}