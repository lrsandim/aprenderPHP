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
    $valor = 10;
    $valor2 = true;
    $valor3 = 85.55;
    $valor4 = (string) $valor;

    echo gettype ($valor);
    echo '<br>';
    echo gettype ($valor2);
    echo '<br>';
    echo gettype ($valor3);
    echo '<br>';
    echo gettype ($valor4);
    echo '<br>';

  ?>
</body>
</html>