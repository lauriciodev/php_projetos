<?php
// para saber quais itens estão diferentes comparando arrays usamos 
//array_diff();

// retornara os itens divergentes do primeiro parametro passado.

$arr1 = [1,2,5];
$arr2 = [1,6,3];

$comp = array_diff($arr1,$arr2);

var_dump($comp);
?>