<?php
//classes anonimas são criadas direto na variavel e nao precisa ser instanciada.


$pessoa = new class(){
  public $nome = "laurixio";

  public function dizerNome(){
     echo "meu nome é " . $this->nome;
  }
};

echo $pessoa->nome . "<br>";
$pessoa->dizerNome();

?>