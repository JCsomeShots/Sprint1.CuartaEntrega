<?php

class Shape{

	public $ancho;
	public $alto;

	public function __construct($ancho , $alto){
		$this-> ancho = $ancho;
		$this -> alto = $alto;
	}

	public function areaTriangulo (){
		echo "El área del triángulo de ". $this->ancho. " de ancho por ". $this->alto ." de alto sera : ". (($this->ancho * $this->alto)/2);
	}

	public function areaRectangulo(){
		echo "El área del rectángulo de ". $this->ancho. " de ancho por ". $this->alto ." de alto sera : ". ($this->ancho * $this->alto);
	}
} 

?>