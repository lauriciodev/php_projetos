<?php 
//para reverter um array use array_reverse();

$myArr = [
  "televisao",
  "radio",
  "caixa de som",
  "celular", 
  "computador",
  "cama de casal"
];

$reverse = array_reverse($myArr);

var_dump($reverse);


?>