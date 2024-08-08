<?php
class Carro{
  public $modelo;
  public $marca;
  public $ano;
  public $cor;
  public $velocidadeMaxima;


  function setVelMax($vel){
  $this->velocidadeMaxima = $vel;
  }
  

  function getVelMax(){
  return $this->velocidadeMaxima;
  }

}


$hillux = new Carro();
$hillux->modelo = "hillux 4x4 ";
$hillux->marca  = "toyota";
$hillux->ano = 2002;
$hillux->cor = "branca";
$hillux->velocidadeMaxima = 300;

echo "antes " . $hillux->getVelMax();
echo "<br>";
$hillux->setVelMax(400);
echo "depois " . $hillux->getVelMax();

?>