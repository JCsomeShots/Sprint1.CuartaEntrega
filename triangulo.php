<?php 
class Triangle extends Shape {
       
	private $forma = 'triangle'  ;

	public function getForma(){
		return $this->forma ;
	}

    	public function area (){
		return (parent::area())/2;
	}

}
?>

