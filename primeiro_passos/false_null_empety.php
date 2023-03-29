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
    //false (true/false) - tipo variável boolean
    // null e empty - valores especiais
    $funcinario1 = null;
    $funcinario2 = '';
    $funcinario3 = false;


    //valores null?
    if(is_null($funcinario1)){
      echo 'Sim, a variável é null';
    } else {
      echo 'Não, a variável não é null';
    }

    echo '<br>';

    if(is_null($funcinario2) ){
      echo 'Sim, a variável é null';
    } else {
      echo 'Não, a variável não é null';
    };

    echo '<br>';

    if(is_null($funcinario3) ){
      echo 'Sim, a variável é null';
    } else {
      echo 'Não, a variável não é null';
    };

    echo '<hr>';
    //valores empty ?

    if(empty($funcinario1)){
      echo 'Sim, a variável esta vazia';
    } else {
      echo 'Não, a variável esta vazia';
    }

    echo '<br>';

    if(empty($funcinario2) ){
      echo 'Sim, a variável esta vazia';
    } else {
      echo 'Não, a variável não esta vazia';
    };

    echo '<br>';

    if(empty($funcinario3) ){
      echo 'Sim, a variável esta vazia';
    } else {
      echo 'Não, a variável não esta vazia';
    };
  ?>
</body>
</html>
