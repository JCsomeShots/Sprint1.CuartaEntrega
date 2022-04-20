<?php 
class Triangle extends Shape {
       
	public $forma = 'triangle';
	
       public function area (){
		return (parent::area())/2;
	}

}
?>

