<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Métodos mágicos</title>
</head>
<body>
	<?php
		class Pessoa {
			public $nome = null;
			
			function __construct ($nome){
				echo 'Objeto iniciado';
				$this->nome = $nome;
			}			
			
			function __destruct() {
				echo 'Objeto removido';
			}
			function __get($atributo) {
				return $this->$atributo;
			}
		}
		$pessoa = new Pessoa('José');
		echo '<br>' . $pessoa->__get('nome');
		echo '<hr>';
		unset($pessoa);
	?>
</body>
</html>
