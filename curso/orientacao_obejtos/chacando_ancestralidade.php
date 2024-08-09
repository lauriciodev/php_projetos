<?php
// com o metodo instanceof podemos checar se objeto é instancia ou herda de determinada classe.

class Veiculo {
   public $rodas;
   public $velocidade;
}

class Funcionario {
   private $salario;
   public  $cargo;
}

$carro = new Veiculo();
$lauricio = new Funcionario();

if($carro instanceof Veiculo){
   echo "carro é objeto de veiculo";
}

if($lauricio instanceof Funcionario){
   echo "lauricio é objeto de veiculo";
}else{
   echo "lauricio nao é objeto de veiculo";
}

?> 
