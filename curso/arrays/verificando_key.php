<?php
 //com o metodo  array_key_exists podemos verificar se um valor na key de um array
 $carro = ["modelo" => "bmw", "cor" => "preto", "motor" => "3.5",];

 if(array_key_exists("marca", $carro)){
  echo "existe sim";
 }else{
  echo "existe nao";
 }
?>