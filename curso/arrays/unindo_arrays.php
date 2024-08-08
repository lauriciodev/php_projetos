<?php 
//para unir arrays usamos o metodo array_merge();

$array1 = [1,2,3,4];
$array2 = [5,6,7,8];
$array3 = [9,10,11,12];

$newArr = array_merge($array1,$array2,$array3);

var_dump($newArr);

?>