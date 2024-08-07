<?php 
// como o metodos splice podemos remover itens de um array o novo array retornado será um array com os indices que nao foram passados como parametro.


// o array original é modificado
//o valor retornado será o valor que foi deletado.

$trasportes = ["carro","moto","bicicleta","onibus","aviao"];


$trasportes2 = array_splice($trasportes,3,1);

echo " array: <br>";
print_r($trasportes);
echo "<br>";

echo "novo array: <br>";
print_r($trasportes2);
?>