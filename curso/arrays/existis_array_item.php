<?php
// para verificar se um determinado intem existe em um array use o metodo in_array(); 
// retornara treu se o item existir;


$arr = ["cadeira","geladeira", "mesa", "armario", "sofá"];

if(in_array("televisão",$arr)){
  echo "item encontrado!";
}else{
  echo "item nao encontrado!";
}
?>
