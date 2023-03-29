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
    $registros = array(
      array('titulo' => 'Título noíticia 1', 'conteudo' => 'Conteúdo notícia 1'),
      array('titulo' => 'Título noíticia 2', 'conteudo' => 'Conteúdo notícia 2'),
      array('titulo' => 'Título noíticia 3', 'conteudo' => 'Conteúdo notícia 3'),
    );
    $idx = 0;
    while($idx < 3) {
      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

      echo '<hr>';
      $idx++;
    }
  ?>
</body>
</html>