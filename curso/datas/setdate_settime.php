<?php
//metodos setDate e setTime
//setDate recebe ano,mes e dia alteando completamente a data
//setTime recebe hora, minuto e segundo, alterando o tempo da data;

$myDate = new DateTime('2024-12-24 10:00:00');
echo $myDate->format("d/m/y") . "<br>";
$myDate->setDate(2000,03,20);
echo $myDate->format("d/m/y") . "<br>";
echo "-=-================== <br>";
echo $myDate->format("h:i:s") . "<br>";
$myDate->setTime(03,03,02);
echo $myDate->format("h:i:s") . "<br>";

?>