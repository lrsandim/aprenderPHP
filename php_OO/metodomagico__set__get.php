<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>metodos magicos</title>
	
</head>
<body>
	<?php
	//PARADINHA	
		class Poker {
		//atributos
			public $posicao = null;
			public $acao = null;
			public $reacao =  null;
			public $cbetFlop = null;
			public $reacaoFlop = null;
			public $cbetTurn = null;
			public $reacaoTurn = null;
			public $cbetriver = null;
			public $recaoriver = null;
		
		//métodos
			function __set($atributo, $valor) {
				$this->$atributo = $valor;
			}
			
			function __get($atributo) {
				return $this->$atributo;
			}
		}
		
		$hand = new Poker();
		$hand->__set('posicao','UTG');
		$hand->__set('acao','raise 2x');
		$hand->__set('cbetFlop','30%');
		$hand->__set('cbetTurn','66%');
		$hand->__set('cbetRiver','all-in');
		echo ' A mão inicia com o ' . $hand->__get('posicao') . ' fazendo ' . $hand->__get('acao') . ', roda em fold e o BB faz call. <br> O BB joga de check, o ' . $hand->__get('posicao') . 
		' faz cbet de ' . $hand->__get('cbetFlop') . ', call. <br> BB check. ' . $hand->__get('posicao') . ' faz cbet turn de ' . $hand->__get('cbetTurn') . '...';
		
	?>
</body>
</html>