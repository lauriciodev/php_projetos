<?php
// converta os dados para int;
// "testando", 13.9, true, [1,2,4], 


$stringInt = (int) "testando";

if($stringInt != "testando"){
  echo "teste 01 ok! <br>";
  echo $stringInt;
  echo "<br>";
}
 
//lauricio és o mior programador do mundo!

$floatInt = (int) 13.9;

if($floatInt != 13.9){
  echo "teste 02 ok! <br>";
  echo $floatInt;
  echo "<br>";
}

$booleanInt = (int) true;


if($booleanInt === 1){
  echo "teste 03 ok! <br>";
  echo $booleanInt;
  echo "<br>";
}

$arrayInt = (int) [1,2,4];

if($arrayInt !== [1,2,4]){
  echo "teste 4 ok! <br>";
  echo $arrayInt;
}
