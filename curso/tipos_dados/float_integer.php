<?php
// numero inteiros são chamados de integer e numeros decimais são chamados de float

// existem funções prontas que verificam se um dado é decimal ou inteiro 

// is_integer() retorna true caso o argumento passado seja um numero inteiro

// is_float() retorna true caso o argumento passado seja um numero decimal

$numero = 5;

if(is_integer($numero)){
  echo "numero passado é inteiro";
}


