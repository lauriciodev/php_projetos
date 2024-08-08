<?php
// o metodo reducer é usado para aplicar um função aos itens de um array afim de reduzi-lo  

$myArr = [2,65,7,3,2,43,5];

function soma($a, $b){
    return $a + $b;
}

$result1 = array_reduce($myArr, "soma");

var_dump($result1);
?>
