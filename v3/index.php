<?php

require('Figura.php');
require('Rectangulo.php');
require('Circulo.php');
require('CalculadoraArea.php');

$figuras = [
	new Rectangulo(2, 5),
	new Rectangulo(2, 2),
	new Circulo(3),
	new Circulo(2)
];

$calculadora = new CalculadoraArea();

var_dump($calculadora->calcularTotal($figuras));