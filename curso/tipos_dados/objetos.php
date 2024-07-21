<?php
//criando objetos

class Car{
  
  function ligar(){ //metodo
    echo "carro ligado !";
  }


}

$myCar -> nome = "lauricio"; //propriedade;

$myCar = new Car();

$myCar->ligar();