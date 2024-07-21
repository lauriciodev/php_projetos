<?php
//arrays são listas que podem ser acessadas por chave e valor 
//as chaves podem ser passadas de forma dinamicas, quando não passadas é atribuidos valores padroes para os valors inseridos

//passando chave e valor 
//array associativo
$nomes = ["nome1" => "lauricio", "nome2" => "mariana", "nome3" => "sandra" ];

echo "exibindo um array associativo <br>";
print_r($nomes);
echo "<br>";

//array por [];
$produtos = array(["carro","aviao","mesa"]);

echo  "exibindo array por [] <br>";
print_r($produtos);
echo "<br>";
//array multidimensional associativo
$usuarios = [
  ["nome" => "lauricxio", "idade" => 22 ],
  ["nome" => "maj", "idade" => 21 ]
];

//obs: um array multidomencional tambem pode ser cridao usando a function array como no exemplo a seguir
//   array([
//     [],
//    [],
//   []
//   ])


echo "exibindo um array multidimensional <br>";
print_r($usuarios);