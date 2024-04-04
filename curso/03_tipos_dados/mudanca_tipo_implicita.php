<?php
// alguma operações podem mudar o tipo de um dado de forma implicita ex: 5 / 2 gera um float 2,5;
// ex: o ponto que o operador de concatenação transforma os numeros na operação em strings 5 . 4


$result = 5 / 2;

if(is_float($result)){
  echo "é float <br>";  
}
$resultString = 5 . 2;

if(is_string($resultString)){
  echo "é string <br>";  
}


//obs