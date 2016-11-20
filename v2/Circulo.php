<?php

class Circulo
{
	protected $radio;

	public function __construct($radio)
	{
		$this->radio = $radio;
	}

	public function getRadio()
	{
		return $this->radio;
	}
}