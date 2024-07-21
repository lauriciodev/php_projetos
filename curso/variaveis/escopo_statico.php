<?php
//para que o valor de uma variavel não seja excluido apos a execulção de uma função, deve se usar o static antes da variavel;

function incrementValue(){
 static $number = 0;
  $number++;

  echo "valor: $number <br>";
}

incrementValue();
incrementValue();
incrementValue();
incrementValue();
incrementValue();