<?php
// para ordenar arrays associativos pelo valor das chaves usamos  a função asort();
//para ordenar pelas chaves usamos ksort();

$pessoas = [
  "maria" => 22,
  "raimunda" => 42,
  "antonia" => 21,
  "sarah" => 25,
  "ana clara" => 28,
];

asort($pessoas);
//array(5) { ["antonia"]=> int(21) ["maria"]=> int(22) ["sarah"]=> int(25) ["ana clara"]=> int(28) ["raimunda"]=> int(42) }
// para ordenar de forma decrescente use arsort();

echo "ordenando pelo valor da chave";
echo "<br>";

var_dump($pessoas);

echo "<br>";

echo "ordenando pela chave"; 
echo "<br>";

ksort($pessoas);
// para ordenanr em ordem decrecente pela chave use krsort($pessoas);
var_dump($pessoas);

?>