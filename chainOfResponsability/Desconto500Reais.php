<?php

class Desconto500Reais implements IDesconto
{
    private $proximoDesconto;

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }

    public function desconta(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }
}