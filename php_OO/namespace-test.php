<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namespaces</title>
</head>

<body>
  <?php
 namespace a;

  class Cliente {
    public $nome = 'Jorge';
    public function __get($attr)
    {
      return $this->$attr;
    }
  }

  namespace b;

  class Clientes {
    public $nome = 'Jamilton';
    public function __get($attr) {
      return $this->$attr;
    }
  }
  ?>
</body>

</html>