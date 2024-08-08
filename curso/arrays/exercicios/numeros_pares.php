<?php
/* Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.

A função deve retornar um novo array contendo apenas os números pares presentes no array original.

Considere que o array sempre terá pelo menos um elemento. */

function encontrarPares($arr){ 
    $indice = [];
  foreach ($arr as $value) {
    if($value % 2 == 0){
      array_push($indice, $value);
    }
  }

 return $indice;
}

$res = encontrarPares([1,2,4,6,87]);

var_dump($res);

?>