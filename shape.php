<?php

class Shape{

	public $ancho;
	public $alto;

	public function __construct($ancho , $alto){
		$this-> ancho = $ancho;
		$this-> alto = $alto;
	}
	
	public function area()
    	{
       		 return $this->ancho * $this->alto;
    	}
}

?>
