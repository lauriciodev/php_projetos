<?php
/* Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.

A função deve retornar o maior elemento presente no array.

Considere que o array sempre terá pelo menos um elemento. */

function maiorElemento($arr){
if(!is_array($arr)){
  echo "o parametro deve ser do tipo array";
}
rsort($arr);
return $arr[0];
}

$res = maiorElemento([12,33,21,56,62]);

var_dump($res);
?>