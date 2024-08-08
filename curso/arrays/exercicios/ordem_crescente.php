<?php
// criar uma função que retorne um array de numeros em oredem crescente.

function returnUpper($arr){
sort($arr);
return $arr;
}

$result = returnUpper([75,21,24,2,1,32]);

var_dump($result);
?>