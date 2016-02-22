<?php

require("CalculadoraService.php");

$primerValor = $_GET['primerValor'];
$segundoValor =  $_GET['segundoValor'];
$operacion = $_GET['operacion'];

$calculadora = new CalculadoraService();

if ($operacion == $calculadora::SUMA) {
    $resultado = $calculadora->sumar($primerValor, $segundoValor);
} elseif ($operacion == $calculadora::RESTA) {
    $resultado = $calculadora->restar($primerValor, $segundoValor);
} elseif ($operacion == $calculadora::MULTIPLICAR) {
	$resultado = $calculadora->multiplicar($primerValor, $segundoValor);
} elseif ($operacion == $calculadora::DIVISION) {
	$resultado = $calculadora->division($primerValor, $segundoValor);
} elseif ($operacion == $calculadora::RESIDUO) {
    $resultado = $calculadora->residuo($primerValor);
}

echo($resultado);