<?php
// com o metodo foreach podemos iterar sobre um array manipulando seus valores
// podemos acessar nao apenas os valores, tambem as chaves.
// ex:  foreach($arr as $chave => valor);


$pessoa1 = [
  "nome" => "mariana ximendes",
  "idade" => 25,
  "profissao" => "atriz"
];

$pessoa2 = [
  "nome" => "Alexia ",
  "idade" => 23,
  "profissao" => "Ia"
];


foreach($pessoa1 as $chave => $valor){
  echo "$chave : $valor <br>";
}

foreach($pessoa2 as $chave => $valor){
   if($chave == "nome"){
    echo "este é o nome";
    return;
   }
  echo "$chave : $valor <br>";
}