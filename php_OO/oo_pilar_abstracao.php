<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scle=1.0">
	<title></title>
</head>
<body>
	<?php
	//modelo
	//nome da classe segue o CamelCase
		class Funcionario {
			//atributos
			public $nome = 'Mr.Catra';
			public $telefone = '0800 1';
			public $numFilhos = '35';
			
			//métodos
			function resumirCadFunc() {
				return " $this->nome possui $this->numFilhos filho(s)";
			}
			
			function modificarNumFilhos($numFilhos) {
				$this->numFilhos = $numFilhos;
				//funcao sem necessidade de retorno
				//objetivo é afetar uma caracteristica do objeto
				
			}
		}
		
		$y = new Funcionario();
		echo $y->resumirCadFunc();
		echo '<br>';
		$y->modificarNumFilhos(26);
		echo $y->resumirCadFunc();
		echo '<hr />';
		
		$x =new Funcionario();
		echo $x->resumirCadFunc();
		echo '<br>';
		$x->modificarNumFilhos(1);
		echo $x->resumirCadFunc();
	?>
</body>
</html>