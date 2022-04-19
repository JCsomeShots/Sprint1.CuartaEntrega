<?php 
class Triangle extends Shape {
       public function areaTriangulo (){
          return ($this->ancho * $this->alto)/2;
        }
  
        public function areaTrianguloImprimir (){
          echo "El área del triángulo de ". $this->ancho. " de ancho por ". $this->alto ." de alto sera : ".  $this->areaTriangulo();
        }

}
?>

