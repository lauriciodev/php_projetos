<?php
//Escreva uma função chamada somaElementos que recebe um array de números como parâmetro.

//A função deve retornar a soma de todos os elementos do array.

//Considere que o array sempre terá pelo menos um elemento


function sumItens($itens){
if(!is_array($itens)){
  return "o parametro deve ser do tipo array";
} else{
  if(isset($itens)){
      return array_sum($itens);
  }
}
}

$arr = [1,2,55,67,3];

$res = sumItens($arr);

var_dump($res);

?>