<?php

class Orcamento
{
    private $valor;
    private $itens = array();

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function adicionarItem(Item $item)
    {
        $this->itens[] = $item;
    }
}