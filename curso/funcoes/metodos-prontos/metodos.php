<?php 
//funções prontas que retornam informações sobre os parametros de uma função

// func_get_args() retorna um array com os argumentos da função

function soma($x, $y){
 print_r(func_get_args());

 echo "<br>";
 echo func_num_args() . "<br>";

 return  $x + $y;



}

soma(4,4);

?>