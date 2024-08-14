<?php
// strtotime tranforma em tempo o parametro passado, que deve ser uma string informando tempo.


$fiveDays = strtotime("5 days"); // podem ser passados meses e anos

echo "cinco dias ". $fiveDays;
//cinco dias 1724086327

//o valor retornado pode ser passado para uma data afim de manipular melhor.

$currentDate = date("d/m/y", $fiveDays);
echo "<br> " .$currentDate;
// 19/08/24 a data foi adicionada contando com os 5 dias

?>