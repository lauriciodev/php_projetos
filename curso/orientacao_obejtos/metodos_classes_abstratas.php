<?php
// classes abstratas nao podem ser instancidas;
// os metodos deverão ser implementados obrigatiamente por todas as classes que herdarem;

abstract class Casa{
  public  static function apagarLuz(){
    echo "sou um metodo statico";
  }
  // metodos abstratos nao podem conter corpo
}

// classes abstratas podem ser chamadas diretamente sem precisar ser instanciada
// Casa::apagarLuz(); aqui deu erro pois um metodo de uma class abstrata so pode ser chamado se  ele for static;

Casa::apagarLuz();





class Quarto extends Casa {

}



$quartinho = new Quarto();

$quartinho->apagarLuz();

?>