<?php
// com o implementes podemos obrigar classes filhas a usarem metodos e propriedade antes declaradas
// na classe pai.

interface  Dispositivo {
 //public $tipo;
 //public $bateria;
  //public $cor; 

  // propriedades so podem ser passadas dentro de uma interface, usando o const
  const tipo ="celular"; 


  // a constante nao será obrigatoria para as classes filhas é apenas uma forma de passar
  // propriedade para elas;
  function showType();

}
class Celular implements Dispositivo {
  public $marca;
  private $type = "celular";

  function showType(){
    echo "tipo". self::tipo; //nesta linha esta forma de acessar constantes
    return $this->type;
  }

}

$iphone = new Celular();
$iphone->marca = "apple";
echo $iphone->marca . "<br>";

echo $iphone->showType();
?>