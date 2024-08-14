<?php 
// uma data pode ser criada como um objeto
// o parametro passado sera a data criada, se nao passarmos nada sera criada com a data atual .

/* 
Você pode especificar uma data e hora no formato de string quando cria um novo objeto DateTime. O formato mais comum é ano-mês-dia hora:minuto:segundo. */

$dataAtual = new DateTime('2024-12-14 10:00:00');

print_r($dataAtual);
?>