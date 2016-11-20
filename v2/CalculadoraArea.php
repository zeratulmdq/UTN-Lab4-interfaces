<?php

class CalculadoraArea
{
	public function calcularTotal($elementos)
	{
		$area = 0;

		foreach($elementos as $elemento)
		{
			$area += $this->calcular($elemento);
		}

		return $area;
	}

	public function calcular($elemento)
	{
		if($elemento instanceof Rectangulo)
			return $elemento->getAlto() * $elemento->getAncho();
		else
			return pi() * pi() * $elemento->getRadio();
	}
}