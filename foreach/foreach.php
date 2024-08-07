<?php
$myArr = ["lauricio","teste","teste2", "lauro"];


foreach ($myArr as $key => $value) {
  echo " chave é $key item é $value <br>";

  if($value == "lauricio"){
    //lauricio esteve aqui.
    echo "o chefe chegou!!!<br>";
  }
}

?>
