<?php

class SemDesconto implements IDesconto
{
    public function setProximo(IDesconto $desconto)
    {
        // nao implementar!
    }

    public function desconta(Orcamento $orcamento)
    {
        return 0;
    }
}