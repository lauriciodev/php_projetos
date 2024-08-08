<?php
// com o metodo compact podemos trasformar uma varival em intem de um array, seu nome será a key. podemos passar mais de uma variavel;


$modelo = "gol g4";
$cor = "vermelho";
$ano = "2004";

$myArray = compact("modelo", "cor", "ano");

var_dump($myArray);