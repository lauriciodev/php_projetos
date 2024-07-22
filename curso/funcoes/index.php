<?php 
$myArray = ["carro","aviao","onibus","bicicleta"];

function toStr($arr){
  return implode(", ", $arr); 
  //função implode retorna o array em string, separados pelo primeiro parametro passado.
}

$arrStr = toStr($myArray);

echo $arrStr;

?>