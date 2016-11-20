<?php

class CalculadoraArea
{
	public function calcularTotal($elementos)
	{
		$area = 0;

		foreach($elementos as $elemento)
		{
			$area += $elemento->getAlto() * $elemento->getAncho();
		}

		return $area;
	}
}