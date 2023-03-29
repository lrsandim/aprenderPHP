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
    function calcularIR($salario) {
      $imposto = 0;

      if($salario <= 1903.98 ) {
        $imposto = 0;
        $aliquota = 'isento';
      } else 

      if ($salario >= 1903.99 && $salario <= 2826.65) {
        $imposto = $salario *0.075 ;
      } else 

      if ($salario >= 2826.66 && $salario <= 3751.05) {
        $imposto = $salario * 0.15 ;
      } else

      if ($salario >= 3751.06 && $salario <= 4664.68) {
        $imposto = $salario * 0.225 ;
      } else

      if ($salario >= 4664.68) {
        $imposto = $salario * 0.275  ;
      }
      return $imposto; $aliquota;  }
      echo calcularIR(2975);
  ?>
</body>
</html>