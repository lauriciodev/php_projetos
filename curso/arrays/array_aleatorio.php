<?php 
// como o metodo shuffle() recebemos um array com os itens ordenados de forma aleatoria, altera o array original.

$myArr = [
  "televisao",
  "radio",
  "caixa de som",
  "celular", 
  "computador",
  "cama de casal"
];

shuffle($myArr);

var_dump($myArr);
?>