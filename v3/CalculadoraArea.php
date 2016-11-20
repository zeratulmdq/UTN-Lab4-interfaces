<?php

class CalculadoraArea
{
	/**
	 * Devuelve la suma de las áreas de los
	 * elementos dados
	 * 
	 * @param  Array $elementos Elementos a calcular
	 * @return Mixed            Área total calculada
	 */
	public function calcularTotal(Array $elementos)
	{
		$area = 0;

		foreach($elementos as $elemento)
		{
			$area += $this->calcular($elemento);
		}

		return $area;
	}

	/**
	 * Calcula el área de un elemento específico
	 * 
	 * @param  Figura $elemento Elemento a calcular
	 * @return mixed            Área total calculada
	 */
	public function calcular(Figura $elemento)
	{
		return $elemento->area();
	}
}