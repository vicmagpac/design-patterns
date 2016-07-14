<?php

class CalculadorDeDesconto
{
    public function calcula(Orcamento $orcamento)
    {
        $desconto1 = new Desconto5Itens();
        $desconto2 = new Desconto500Reais();
        $desconto3 = new DescontoPorVendaCasada();
        $desconto4 = new SemDesconto();

        $desconto1->setProximo($desconto2);
        $desconto2->setProximo($desconto3);
        $desconto3->setProximo($desconto4);

        return $desconto1->desconta($orcamento);
    }
}