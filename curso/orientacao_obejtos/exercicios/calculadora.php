<?php
//criando calculadora;

class Calculadora{
  public function somar($n1, $n2){
    return $n1 + $n2;
  }
  public function subtrair($n1, $n2){
    return $n1 - $n2;
  }
  public function multiplicar($n1, $n2){
    return $n1 * $n2;
  }
  public function dividir($n1, $n2){
    return $n1 / $n2;
  }
}


$calc = new Calculadora();

echo "soma" . $calc->somar(1,4) ." <br>";
echo "subtrai" . $calc->subtrair(1,4) ." <br>";
echo "multiplicar" . $calc->multiplicar(1,4) ." <br>";
echo "dividir" . $calc->dividir(4,2) ." <br>";

?>