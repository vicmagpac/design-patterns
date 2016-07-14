<?php

abstract class TemplateDeImpostoCondicional implements IImposto
{
    public abstract function deveUsarMaximaTaxacao(Orcamento $orcamento);
    public abstract function maximaTaxacao(Orcamento $orcamento);
    public abstract function minimaTaxacao(Orcamento $orcamento);

    public function calcula(Orcamento $orcamento)
    {
        if ($this->deveUsarMaximaTaxacao($orcamento)) {
            return $this->maximaTaxacao($orcamento);
        } else {
            return $this->minimaTaxacao($orcamento);
        }
    }
}