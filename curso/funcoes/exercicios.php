<?php
// criar uma funcão que recebe como parametro um array e retorna apenas os numeros desse array que forem maior que 7;


//exercicio 01
echo "Exercicio 01 <br>";

$myArr = [3,5,7,8,12,22,121,55];

function upperSeven($arr){
  $newArr = [];
for($i = 0;$i < count($arr); $i++){
  if($arr[$i] > 7){
    array_push($newArr,$arr[$i]);
  }
}


return $newArr;
}

print_r(upperSeven($myArr));


echo "<br>";
echo "Exercicio 02 <br>";


//criar uma função que recebe um numero inteiro positivo com parametro
//a função deve retornar a soma de todos os pares de 1 até o numero forncido, inclusive;
//ultilize uma estrutura de repetição para percorrer os numeros de  uma variavel para aculmular a soma.


function sumPares($num){
  $result = 0;
for($i = 1; $i < $num + 1; $i++){
    if($i % 2 == 0){
     $result += $i;
     echo $result . "<br>";
    }
}
}
sumPares(6);


echo "<br>";
echo "Exercicio 02 le0 <br>";

function sumEvenNumbers($numberEnd) {
  $result = 0;
  for($i = 0; $i < $numberEnd + 1; $i++){
      if($i % 2 == 0) {
        $result += $i;
        echo "$result <br>";
      }
  }
  
}

sumEvenNumbers(6);

echo "<br>";
echo "Exercicio 03 <br>";

//missão definir em uma função uma cor padrao que sera passada como parametro, caso nao seja passada deve ser definida como vermelha


function defColor($myColor = "vermelha"){
  echo " a cor passada é: $myColor";
}

defColor();