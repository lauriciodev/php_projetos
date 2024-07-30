<?php
//criar uma função que recebe caracteristicas de um objeto como argumento em um array
//o array deve conter o nome => preco
//retornar apenas os itens que custam mais que  R$10; 
//imprimir o retorno.

function upperTen($itens){
  $itensUpperTen = [];

  foreach($itens as $item => $preco){
    if($preco > 10){
      array_push($itensUpperTen, $item);
    }
  }

  return $itensUpperTen;
}
$myItens = ["carro" => 2000, "casa" => 20000, "escova" => 3, "caderno" => 5];

var_dump(upperTen($myItens));
?>
