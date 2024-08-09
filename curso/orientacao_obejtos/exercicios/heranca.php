<?php
class Pessoa {
   public $nome = "lauricio";
   public $idade;


   public function falar(){
     echo "pessoa falando";
   }
}

class Professor extends Pessoa {
  public $materia = "matematica";

  public  function comecarAula(){
    echo "começando aula";
  }
}

$lauricio = new Professor();

$lauricio->falar();
 echo $lauricio->nome;

?>
