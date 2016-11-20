<?php

class Rectangulo implements Figura
{
	protected $ancho;
	protected $alto;

	/**
	 * Constructor
	 * 
	 * @param mixed $alto  Alto del rectángulo
	 * @param mixed $ancho Ancho del rectángulo
	 */
	public function __construct($alto, $ancho)
	{
		$this->alto = $alto;
		$this->ancho = $ancho;
	}

	/**
	 * Getter para el alto
	 * 
	 * @return mixed
	 */
	public function getAlto()
	{
		return $this->alto;
	}

	/**
	 * Getter para el ancho
	 * 
	 * @return mixed
	 */
	public function getAncho()
	{
		return $this->ancho;
	}

	/**
	 * Área del rectángulo
	 * 
	 * @return mixed
	 */
	public function area()
	{
		return $this->alto * $this->ancho;
	}
}