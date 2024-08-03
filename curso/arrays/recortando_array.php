<?php 
// o metodo array slice é uma forma dem pegar apenas alguns itens de um array

$myArr = [1,2,3,4,5,6];

$myNewArr = array_slice($myArr, 0,count($myArr) - 1);

var_dump($myNewArr);
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }

?>