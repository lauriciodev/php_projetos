<?php 
// escrever uma função que retorna o numero de vogais em uma string que sera passada como parametro.

function numberVolws($text){
  $numberVolws = 0;
  $volws = ["a","e","i","o","u"];
  $countStr = str_split($text);
  for($i = 0; $i < count($countStr); $i++){
    if(in_array($countStr[$i], $volws)){

       print_r( $countStr[$i]);
       echo "<br>";

      }

  }

  
}

numberVolws("teste de mdigitação");
?>