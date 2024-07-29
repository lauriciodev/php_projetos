<?php
//Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.

//A função deve verificar se o número fornecido é um número primo.

//Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

//Caso o número fornecido seja menor que 2, retorne false.

//Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.

function isPrime($num){
  if($num < 2){
    return false;
  }else{
    //enquanto o indice for menor que a raiz quadrada do parametro.
    for($i = 2; $i <= sqrt($num); $i++){
      if($num % $i == 0){
        return false;
      }
    }

    return true;
  }
}

var_dump(isPrime(11));
var_dump(isPrime(1));
var_dump(isPrime(7));
?>
