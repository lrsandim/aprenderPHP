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

    // Exemplo, frete para quem tem cartão da loja e fez compra superior a 100 R$
    $usuario_possui_cartao_loja = true;
    $valor_compra = 255;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
      $valor_frete = 0;
      $recebeu_desconto_frete = true;
    }
  ?>

  <h1> Detalhes do pedido</h1>
  <p>Possui cartão da loja?
  <?php 
    if($usuario_possui_cartao_loja == true/*como ele já possui valor true definido lá em cima, não preciso colocar aqui...*/) {
      echo 'SIM';
    } else { 'NÃO'; }
  ?>
  </p>
  <p>Valor da compra: <?= $valor_compra ?></p>

  <p>Recebeu desconto no frete?
    <?php
      if ($recebeu_desconto_frete == true) {
        echo 'SIM';
      } else { echo 'NÃO';}
    ?>
  </p>

  <p>
    Valor do frete: <?= $valor_frete ?>
  </p>
</body>
</html>