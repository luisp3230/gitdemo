<?php
namespace Hackspace;

class Suma
{
	private $x;
	private $y;
	
	public function construct_($x, $y)
	{
		$this->x=$x;
		$this->y=$y;
	}

	public function ejecutar()
	{
		return $this->x+ $this->y;
	}
}
