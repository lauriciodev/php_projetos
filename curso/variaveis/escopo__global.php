<?php
// uma variavel tem escopo global quando é criada fora de uma função;
// caso seja passada 

$globalFunction = "sou global";

function mostraGlobal(){
  global $globalFunction ;
  //uma variavel global so pode ser alterada ou usada dentro de uma função usando a flag "global" ; 
  echo "global $globalFunction";
}

/* function tesar(){
  echo "glob $globalFunction ";
  
} */

mostraGlobal();