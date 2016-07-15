<?php

class IKCV extends TemplateDeImpostoCondicional
{
    public function deveUsarMaximaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->algumItemSuperiorA100Reais($orcamento);
    }

    public function minimaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }

    public function maximaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function algumItemSuperiorA100Reais(Orcamento $orcamento)
    {
        foreach($orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            }
        }

        return false;
    }
}