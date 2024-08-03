<?php
// coma o metodo strrpos podemos obter a ultima ocorrencia de uma string

$str = "esta é uma teste string de teste";

$last = strrpos($str, "teste");
$first = strpos($str, "teste");

echo "primeira" .$first . "ultima" . $last;
?>