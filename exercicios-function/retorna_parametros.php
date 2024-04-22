<?php

// existem funções prontas que podemser usadas para trabalhar com o parametros  passados em uma  função
// func_get_arg retorna um array com com os argumentos passados na função
// func_num_args retorna o numero de argumentos passados na função;

function showTheArgs($par1, $par2, $par3){
print_r(func_get_args());
echo func_num_args();
return $par1 + $par2 + $par3;

}


showTheArgs("tesr",22,55);