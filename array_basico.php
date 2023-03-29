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
    //sequênciasis (numéricos)
    $lista_frutas = array ('Banana','Maça','Morango','Uva','Abacate');
    $lista_frutas[] = 'Abacaxi';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '<br>';
    print_r($lista_frutas);
    
    //recuperando item especifico do array

    echo '<br>' . '<hr>';
    echo $lista_frutas[3];

    //associativos
    $lista_frutas = array (
      'a' => 'Banana', 
      'b' => 'Maça', 
      'c' => 'Morango', 
      'd' => 'Uva', 
      'e' => 'Abacate');
      
    echo '<pre>';
    var_dump($lista_frutas);
    echo '<pre>';

    echo $lista_frutas['b'];
  ?>
</body>
</html>