<?php 
// compactar variaveis para um array e depois fazer um loop exibindo os valores de cada intem/vaiavel

$nome = "lauricio";
$idade = 22;
$profissao = "programador";



$usuario = compact("nome","idade", "profissao");

foreach ($usuario as $key => $value) {
  echo "$key: $value <br>";
}