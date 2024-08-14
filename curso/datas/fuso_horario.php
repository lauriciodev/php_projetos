<?php
// o php por padrao vai usar o fuso horario da maqui que esta execultando.
// para definir use date_dafault_timezone_set;
// esta funcao recebe como parametro o novo fuso horario em string 

date_default_timezone_set("Asia/Almaty");

$data = new DateTime();

print_r($data);

?>