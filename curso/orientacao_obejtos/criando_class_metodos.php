<?php
class User {
  //propriedades
public $nome;

//metodos
 function __construct($nomeUser){
  $this->nome = $nomeUser;
 }
  function falarNome(){
    echo "Olá meu nome é " . $this->nome;
  }
}

$lau = new User("lauricio");
$lau->falarNome();