<?php

$myArr = ["lauricio",true, 54,false,[],2.3,"programador","analisata"];

$numberArr = count($myArr);
$indice = 0;

while ($indice < $numberArr) {
  if(is_string($myArr[$indice])){
    echo $myArr[$indice] . "<br>";
  }

  $indice++;
}

?>
