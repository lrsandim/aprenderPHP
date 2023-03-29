<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- comentario html aparece em elements do inspecionar? -->
    <?php
    // Comentário de uma linha
    echo 'Comando echo <br>';

    # Comentário de uma linha
    print 'Comando print <hr>';

    /* cometário de multiplas linhas */
    ?>

    <?php
    //string
    $nome = 'Lucas R Sandim';
    //inteiro
    $idade = 29;
    //float
    $peso = 82.5;
    //boolean
    $fumante_sn = true; //(true = 1) or (false = vazio)

    //... lógica ...//

    $idade = 30;
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante <?= $fumante_sn?></p>
</body>
</html>