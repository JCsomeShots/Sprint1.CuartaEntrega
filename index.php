<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcions i Estructures de control</title>
  <style>
    h1 , h2 {
      text-align: center;
    }
    .ex {
      padding: 20px;
      background-color: lightgoldenrodyellow;
    }
  </style>
</head>
<body>
<h1>POO</h1>
<h2>NIVELL 1</h2>

<section class = "ej01 ex">
<?php
 echo "<h3> Exercici 1</h3>
 	<p>Clases </p>";
 echo "<p>Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos).</p>";

class employ{

	public $nombre;
	public $sueldo;

	public function inicio($nom , $sou)
	{
		$this-> nombre = $nom;
		$this-> sueldo = $sou;
	}
	public function imprimir(){
		echo $this->nombre . "<br>";

		if ($this->sueldo > 6000){
			echo "Debe pagar impuestos <br>";
		} else {
			echo "No debe pagar impuestos <br>";
		}
	}
}

$employ1 = new employ();
$employ1 -> inicio("JuanCarlo ", 6001);
$employ1 -> imprimir();



?>
</section>

<section class = "ej02 ex">
<?php
 echo "<h3> Exercici 2</h3>
 	<p>Clase Shape </p>";
 echo "<p>Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area()</p>
 	<p>A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.</p>";

	require "./shape.php";
	require "./rectangulo.php";
	require "./triangulo.php";

function imprimir ($figura){
		echo "El área del ". $figura->forma . " de " . $figura->ancho . "m. de ancho por ".$figura->alto . "m. de alto sera: ".$figura->area() . "m2 <br>";
	}


$triangle = new Triangle(5,3);
$triangle1 = new Triangle(8,3);
$rectangle1 = new Rectangulo (5 , 6);
$rectangle2 = new Rectangulo (3 , 6);
	
imprimir ($rectangle2);
imprimir ($rectangle1);
imprimir ($triangle);
imprimir ($triangle1);


 ?>
</section>



</body>
</html>
