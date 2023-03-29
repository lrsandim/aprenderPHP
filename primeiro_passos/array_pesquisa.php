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
    //in_array() => retorna true ou false para a existência do item procurado.
    //array_search() => retorna o indice do valor pesquisado caso ele exista.

    $lista_frutas = ['banana', 'maça', 'morango', 'uva'];
    echo '<pre>';
    print_r($lista_frutas);
    echo '<pre>';

    echo in_array('maça', $lista_frutas);
    //true -> textp = 1
    //false -> texto = vazio
    //posso ligar o in_array a um if/else

    $existe = in_array('uva', $lista_frutas);
    echo '<hr>';
    $indice = array_search('uva', $lista_frutas);

    if($existe) {
      echo 'Sim, o valor pesquisado existe no array e seu indice é' . " $indice "; 
    } else {
      echo 'Não, o valor pesquisado não existe no array';
    }

    array_search('uva', $lista_frutas);


  ?>
</body>
</html>