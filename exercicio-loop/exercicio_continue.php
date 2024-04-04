<?php 
$myArr = [10,20,30,40,50,60,70,80,90,100];

$countArr = count($myArr);
$indice = 10;

while($indice <= 100){


  if($indice == 30 || $indice == 40){
    echo "pulando execulção no indice $indice <br>";
   $indice = $indice + 10;
   continue; 
  }

  echo "executando no indice $indice <br>";
  $indice = $indice + 10;




}



?>
