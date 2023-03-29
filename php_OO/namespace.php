<?php

  namespace A;

  class Cliente
  {
    public $nome = 'Jorge';
    public function __get($attr)
    {
      return $this->$attr;
    }
  }

  namespace B;

  class Cliente
  {
    public $nome = 'Jamilton';
    public function __get($attr)
    {
      return $this->$attr;
    }
  }

  $x = new Cliente();
  echo $x->__get('nome');
?>