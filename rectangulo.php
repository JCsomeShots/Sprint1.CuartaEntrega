<?php 
class Rectangulo extends Shape {
  
    public function areaRectangulo()
    {
        return $this->ancho * $this->alto;
    }
  
    public function areaRectanguloImprimir()
    {
        echo "El área del triángulo de ". $this->ancho. " de ancho por ". $this->alto ." de alto sera : ".  $this->areaRectangulo();
    }
}
?>
