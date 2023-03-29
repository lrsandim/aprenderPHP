<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php-set-get</title>
</head>
<body>
	<?php
		class Funcionario {
			//atributos
			public $nome = null;
			public $telefone = null;
			public $numFilhos = null;
			
		//métodos getters/setters
			
			function setNome($nome) {
				$this->nome = $nome;
			}
			
			function setTelefone($telefone) {
				$this->telefone = $telefone;
			}
			
			function setNumFilhos($numFilhos) {
				$this->numFilhos = $numFilhos;
			}
			
			function getNome() {
				return $this->nome;
			}
			
			function getTelefone(){
				return $this->telefone;
			}
			
			function getNumFilhos() {
				return $this->numFilhos;
			}
			
		
		//métodos
			function resumirCadFunc() {
				return "O funcionário(a) $this->nome possui 
				$this->numFilhos filho(s) e pode ser contatado(a) 
				pelo telefone $this->telefone";
			}
			function modificarNumFilhos($numFilhos) {
				//afetar um atributo do objeto
				$this->numFilhos = $numFilhos;
			}
		}
		
		$y = new Funcionario();
		$y->setNome('Ana');
		$y->setNumFilhos('2');
		$y->setTelefone('(67) 99999-9999');
		echo $y->resumirCadFunc();
		echo '<br>';
		echo ' O funcionário(a) ' . $y->getNome() . ' possui ' .  
				$y->getNumFilhos() . ' filho(s) e pode ser contatado(a) 
				pelo telefone ' . $y->getTelefone();
		echo '<hr />';

		
		$z = new Funcionario();
		$z->setNome('João');
		$z->setNumFilhos('1');
		$z->setTelefone('(67) 99123-1234');
		echo $z->resumirCadFunc();

	?>
</body>
</html>
	