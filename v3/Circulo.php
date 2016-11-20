<?php

class Circulo implements Figura
{
	protected $radio;

	/**
	 * Constructor
	 * 
	 * @param mixed $radio Radio del círculo
	 */
	public function __construct($radio)
	{
		$this->radio = $radio;
	}

	/**
	 * Getter para el radio
	 * 
	 * @return mixed
	 */
	public function getRadio()
	{
		return $this->radio;
	}

	/**
	 * Área del círculo
	 * 
	 * @return mixed
	 */
	public function area()
	{
		return pi() * pi() * $this->radio;
	}
}