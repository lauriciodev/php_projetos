<?php
//array_keys retorna um array apenas com as chaves
//array_values retorna um array apenas com as valores

$myArr = ["carro" =>"gol","casa" => "mansao","aviao"=>"airplan","viagens" => "tailandia"];

$arrKeys = array_keys($myArr);
$arrValues = array_values($myArr);

echo "chaves:<br>";
var_dump($arrKeys);

echo "<br>";
echo "valores: <br>";
var_dump($arrValues);
?>