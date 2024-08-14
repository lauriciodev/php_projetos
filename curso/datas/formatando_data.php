<?php
 // dentro da classe datetime existem metodos que podemos usar para manipular a data criada;

 //esses metodos são : format e modify
 // format define o formato no qual sera exibido
 // modify acrescenta dias, meses, ou anos na data criada

$dataAtual = new DateTime();

echo $dataAtual->format("D/M/Y") . "<br>";
echo $dataAtual->format("l/F/Y") . "<br>";
echo $dataAtual->format("d/m/y") . "<br>";


//adicionando 5 dias
$dataAtual->modify("+5 days"); // o mesmo modelo pode ser usado para meses e anos.
echo $dataAtual->format("d/m/y") . "<br>";

print_r($dataAtual);

?>