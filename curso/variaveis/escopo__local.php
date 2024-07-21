<?php
// acessando escopo local
// uma variavel tem escopo local quando é criada dentro de uma função.;

function myGlobal(){
  $myVarLoc = "sou local";

  echo "$myVarLoc teste";
}

echo $myVarLoc; //variavel local erro

myGlobal();

// echo "$myVarLoc";