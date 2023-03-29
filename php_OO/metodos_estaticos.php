<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale: 1.0">
	<title>Métodos estáticos</title>
</head>
<body>
	<?php
		class Exemplo {
			public static $atributo1 = 'Eu sou um atributo estatico';
			public $atributo2 = 'Eu sou um atributo normal';
			
			public static function metodo1() {
				echo 'Eu sou um método estatico';
			}
			
			public static function metodo2() {
				echo 'Eu sou um método estatico';
			}
		}
		
		//$x = new Exemplo();
		/*
		echo Exemplo ::$atributo1;
		echo '<hr />';
		Exemplo::metodo1();
		*/
		//echo Exemplo::$atributo2;
		echo Exemplo::$metodo2; //funciona em versões anteriores, na 8+ não funciona. Não funcionar é o ideal pois cada um atende a um proposito. 
	?>
</body>
</html>