<?php

class CalculadorDeImpostos
{
    public function realizaCalculo(IImposto $imposto, Orcamento $orcamento)
    {
        $valor = $imposto->calcula($orcamento);

        echo $valor;
    }
}