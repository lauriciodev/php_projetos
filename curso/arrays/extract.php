<?php
// o metodo extract trans forma arrays associativos em variaveis, a chave se torna o nome da variavel e o valor do array se torna o valor da variavel.
 
//se ja houver uma variavel com o valor extraido, o valor dela será sobreescrito para o que esta na variavel.

$myArr = [
  "cor" => "azul",
  "material" => "fibra",
  "forma" => "circulo"
];

extract($myArr);

$cor = "verde";

echo "$cor, $material, $forma";

?>