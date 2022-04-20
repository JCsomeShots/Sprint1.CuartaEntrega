<?php 
class Triangle extends Shape {
       
	private $ancho;
	private $alto;

	public function __construct($ancho , $alto)
	{
		$this-> ancho = $ancho;
		$this-> alto = $alto;
	}
	
	public function getAncho(){
		return $this->ancho;
	}
	public function getAlto(){
		return $this->alto;
	}

	public function area()
    	{
        return $this->ancho * $this->alto;
    	}

}
?>

