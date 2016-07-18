<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

function autoload($class) {
    include $class.".php";
}

spl_autoload_register("autoload");

$impostos = new ISS(new ICMS());
$orcamento = new Orcamento(500);
echo $impostos->calcula($orcamento);