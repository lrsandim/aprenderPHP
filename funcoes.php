<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    //void (sem retorno)
    function exibirBoasVindas () {
      echo 'Bem vindo ao curso de PHP!<br>';
    }

    exibirBoasVindas();

    //return (com retorno)
    function calcularAreaTerreno($largura, $comprimento) {
      $area = $largura * $comprimento;
      return $area;
    }

    echo calcularAreaTerreno(5, 30);
  ?>
</body>
</html>