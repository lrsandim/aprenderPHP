<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- 
    OPERADORES CONDICIONAIS
    == igual
    === idêntico, verifica se os valores sõ iguais e do mesmo tipo
    != ou <> diferente
    !== não idêntico, verifica se os valores são diferentes e de tipos diferentes
    < menor
    > maior
    <= menor igual
    >= maior igual 
   -->
  <?php
    if(!(30 >= 26 XOR 4 == 5)) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }
  ?>
  <!-- 
    OPERADORES LÓGICOS
    && ou AND significa 'e' -> retorna verdadeiro se todos os resultados das expressões forem verdadeiras
    || ou OR significa 'ou' -> retorna verdadeiro caso umas das condições seja verdadeira 
    XOR -> ele retorna verdadeiro se uma expressão for verdadeira e uma falsa || vice-versa
    ! -> inverte o resultado retornado pela expressão

   -->
</body>
</html>