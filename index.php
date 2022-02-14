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

</body>
</html>