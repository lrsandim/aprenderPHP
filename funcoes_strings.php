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

    $texto = 'Curso completo de PHP';
    //string to lower
    echo $texto;
    echo '<br>';
    echo strtolower($texto) . '<hr>';

    //string to upper
    echo $texto;
    echo '<br>';
    echo strtoupper($texto) . '<hr>';

    //upper case first
    echo $texto;
    echo '<br>';
    echo ucfirst($texto) . '<hr>';

    //string lenght (conta os caracteres, inclusive os espaços em branco)
    echo $texto;
    echo '<br>';
    echo strlen($texto) . '<hr>';

    //troca caracter parametro 1 por caracter parametro 2
    echo $texto;
    echo '<br>';
    echo str_replace('P','F', $texto) . '<hr>';
  ?>
</body>
</html>