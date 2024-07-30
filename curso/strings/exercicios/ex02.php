<?php
//percorrer string "o rato roeu a roupa do rei de roma";
//imprimind apenas as letras "a" presentas na string;

//$myStr = "O rato roeu a roupa do rei de roma";
$myStr = "Lauricio sempre será o mestre da programação para sempre";


$indice = 0;
for($i = 0; $i < strlen($myStr); $i++){
  if($myStr[$i] == "a"){
    $indice++;
    echo $myStr[$i]  ;
  }
}

  echo "<br>" . $indice;

?>
