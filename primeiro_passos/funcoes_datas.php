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
    /* recuperacao da data atual / dta corrente */
    date_default_timezone_set('America/Campo_Grande');
    echo date('d/m/Y H:i');
    echo '<br>';

    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp
    //01/01/1970
    
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br>';
    echo $data_final . ' - ' . $time_final;
    echo '<br>';
    $diferenca_time = $time_final - $time_inicial;

    echo $diferenca_time;
  ?>
</body>
</html>