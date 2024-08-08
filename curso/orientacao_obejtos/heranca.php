<?php
 
 class Celular { 
  protected $marca = "samsung";
  public $ligado = false;

  public function showMarca(){
    return $this->marca;
  }

  function ligar(){
    $this->ligado = true;
  }

  function desligar(){
    $this->ligado = false;
  }

}

class App extends Celular{
 
  //acessando propriedade da classe mae;
  function showMarcaFromApp(){
    echo "marca ". $this->marca;
  }

}

$face = new App();

$face->showMarcaFromApp();


?>