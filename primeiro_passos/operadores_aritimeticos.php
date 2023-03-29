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
    $num1 = 13;
    $num2 = 4;
    echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
    echo '<br>';
    echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
    echo '<br>';
    echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
    echo '<br>';
    echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
    echo '<br>';
    echo "A modulo entre $num1 e $num2 é " . ($num1 % $num2);
    echo '<br>';echo '<br>';echo '<br>';
    /* operadores aritiméticos na atribuição de valores */

    $x = 10;
    $x += 10;
    echo $x;
    echo '<br>';echo '<br>';echo '<br>';

    /* Operadores de incremento e decremento (somar 1 ou subtrair 1) */

    $a = 7;
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a pós incremento é '. $a++ .' <br>';
    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a pre incremento é '. ++$a .' <br>';

  ?>
</body>
</html>