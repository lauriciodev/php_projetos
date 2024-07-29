<?php
function arrToStr($itens){
  $str = "os itens no carrinho são > ";
  
  for($i = 0; $i < count($itens); $i++){
    if($i + 1 == count($itens)){
      $str .= "$itens[$i].";
    }else{
     
      $str .= "$itens[$i], "; 
    }
  }

   return $str;
}

$result = arrToStr(["sabao","refrigerante","arroz", "carne"]);

echo $result;
?>

