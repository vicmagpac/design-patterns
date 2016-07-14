<?php

ini_set('display_errors', true);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$orcamento = new Orcamento(100);

$icms = new ICSM();
$iis = new IIS();
$iccc = new ICCC();


// polimosfismo
$calculadorDeImpostos = new CalculadorDeImpostos();
$calculadorDeImpostos->realizaCalculo($icms, $orcamento);
echo '<br>';
$calculadorDeImpostos->realizaCalculo($iis, $orcamento);
echo '<br>';
// sem usar a classe calculadora de impsotos
echo $iccc->calcula($orcamento);


