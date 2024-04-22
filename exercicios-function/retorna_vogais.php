<?php

function countVowels($text){
   $conunt = 0;
   
    $vowels = ["a","e","i","o","u"];
   for($i= 0; $i < strlen($text);$i++){
    $letter = $text[$i];  
    
    if(in_array($letter,$vowels)){
        $conunt++;
    } 
   }

   return $conunt;
   
}


$result =  countVowels("testandoo");

echo "resultado = $result";

?>