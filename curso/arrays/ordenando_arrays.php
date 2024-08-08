<?php
// para alterar a ordem de um array use o metodo sort() para crescente e a forma inversa use o
// rsort;

//este metodo altera a estrutura original do array passado como parametro.

$arr = [1,2,20,4,5,6,7,8];
sort($arr);
var_dump($arr);
echo "<br>";
rsort($arr);

var_dump($arr);

?>
