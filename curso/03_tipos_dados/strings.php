<?php
//a diferença entre usar aspas duplas e usar aspas simples é que as aspas duplas podem interpretar variavei! 
$nome = "lauricio";
echo "testando strings <br>";
echo "meu nome é $nome <br>";

//echo 'meu nome é $lauricio'

// checando se um dado é uma string


$nome = "lauricio" ;

$myString = "minha string";

if(is_string($myString)){
  echo "uma string foi passada";
}
?>