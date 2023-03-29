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
  // arredonda para cima
    $num = 7.3;
    echo ceil($num) . '<br>';
    echo ceil(7.3) . '<hr>';

  // arredonda para baixo
    $num = -9.5;
    echo floor($num) . '<br>';
    echo floor(7.3) . '<hr>';

  // arredonda com base na fração
    $num = -9.5;
    echo round($num) . '<br>';
    echo round(7.3) . '<hr>';
  
  // gerar um valor aleatório de 0 até randmax

  echo rand();
  echo '<br>' . getrandmax() . '<hr>';

  // retorna a raiz quadrada de um número

  echo sqrt(16);

  ?>
</body>
</html>