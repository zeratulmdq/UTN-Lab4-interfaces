<?php

require('Rectangulo.php');
require('CalculadoraArea.php');

$figuras = [
	new Rectangulo(2, 5),
	new Rectangulo(2, 2)
];

$calculadora = new CalculadoraArea();

var_dump($calculadora->calcularTotal($figuras));