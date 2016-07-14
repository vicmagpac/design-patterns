<?php

class Orcamento
{
    private $valor;


    public function getValor()
    {
        return $this->valor;
    }

    function __construct($valor)
    {
        $this->valor = $valor;
    }
}