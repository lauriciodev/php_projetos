<?php
// podemos definir a acessobilidade de propriedades e metodos doentro de uma classe.

// public : pode ser acessada de qualquer forma;
//protected : pode ser acessade apenas pela classe de origem e pelas classes que herdam dela.
// pode ser acessada apenas pela classe que foi criada.

class Carro {
  public $velocidade = 300;
  protected $suspencao = false;

  function showSuspention(){
    
   return $this->suspencao;
  }
}

class Mecanico extends Carro{
 
 function upperVel($carro){
    $carro->velocidade = 500;
  }

  function installSuspention($carro){
   $carro->suspencao = true;
  }

}


$bmw = new Carro();

$mecanico = new Mecanico();

$mecanico->upperVel($bmw);
$mecanico->installSuspention($bmw);

echo "velocidade:". $bmw->velocidade;

if($bmw->showSuspention()){
  echo "<p style='color:white; background-color:green;'> suspenção instalada com sucesso ! </p>";
}else{
  echo "suspenção nao instalada";
}


?>