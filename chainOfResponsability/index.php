<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$calculador = new CalculadorDeDesconto();

$orcamento = new Orcamento(200);
$orcamento->adicionarItem(new Item("CANETA", 100));
$orcamento->adicionarItem(new Item("LAPIS", 100));

$desconto = $calculador->calcula($orcamento);

echo $desconto;