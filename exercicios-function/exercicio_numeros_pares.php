<?php

function sumEvenNumber($number){
 $result = 0;
 
 for($i = 0; $i < $number; $i++){
    if($i % 2 == 0){
        $result += $i;
    }
 }
 return $result;

}


$response = sumEvenNumber(10);

echo "$response soma de numeros pares";

?>