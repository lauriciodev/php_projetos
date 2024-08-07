<?php
//crie um array com valores de alimento e remova algum deles;

$alimentos = ["maçã","pera", "arroz", "feijao", "pera"];

$alimentosRemovidos = array_splice($alimentos, 3,2);

echo "alimentos restantes <br>";
print_r($alimentos);
echo "<br>";
echo "alimentos removidos";
print_r($alimentosRemovidos);