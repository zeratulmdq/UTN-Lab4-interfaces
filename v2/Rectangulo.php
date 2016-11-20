<?php

class Rectangulo
{
	protected $ancho;
	protected $alto;

	public function __construct($alto, $ancho)
	{
		$this->alto = $alto;
		$this->ancho = $ancho;
	}

	public function getAlto()
	{
		return $this->alto;
	}

	public function getAncho()
	{
		return $this->ancho;
	}
}