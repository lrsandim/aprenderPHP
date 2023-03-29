<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Polimorfismo</title>
</head>
<body>
	<?php
				class Carro extends Veiculo {
			public $teto_solar = true;
			
			function __construct($placa, $cor){
				$this->placa= $placa;
				$this->cor = $cor;
			}
			
			function abrirTetoSolar() {
				echo 'Abrir teto solar';
			}
			
			function alterarPosicaoVolante() {
				echo 'volante';
			}
		}
		
		class Moto extends Veiculo {
			
			public $contraPesoGuidao = true;
			
			function __construct($placa, $cor){
				$this->placa= $placa;
				$this->cor = $cor;
			}
			
			function empinar() {
				echo 'Empinar';
			}
			
			function trocarMarcha() {
				echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
			}
		}
		
		class Veiculo {
			public $placa = null;
			public $cor = null;

			function acelerar() {
				echo 'Acelerar';
			}
			function freiar() {
				echo 'Freiar';
			}
			
			function trocarMarcha() {
				echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
			}
		}
		
		$carro = new Carro('ABC-1234', 'Branco');
		$moto = new Moto('CBA-4321', 'Preto' );
			
		echo '<pre>';
		print_r($carro);
		print_r($moto);
		echo '</pre>';
		echo '<hr />';
		
		$carro->abrirTetoSolar();
		echo '<br>';
		$carro->trocarMarcha();
		
		echo '<hr />';
		$moto->empinar();
		echo '<br>';
		$moto->trocarMarcha();
	?>
</body>
</html>
