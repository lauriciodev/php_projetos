<?php
//arrays são listas que podem ser acessadas por chave e valor 
//as chaves podem ser passadas de forma dinamicas, quando não passadas é atribuidos valores padroes para os valors inseridos

//passando chave e valor 

$nomes = ["nome1" => "lauricio", "nome2" => "mariana", "nome3" => "sandra" ];

//acessando valores por chave;

echo $nomes["nome1"];
//lauricio


echo " <br>===================== <br>";
//passando apenas o valor
$produtos = ["caderno", "energetico", "cadeiras"];
//acessando valores por chave padrao

echo $produtos[0];
//caderno

//função que exibe array

echo " <br>===================== <br>";

print_r($nomes);

echo " <br>===================== <br>";

print_r($produtos);