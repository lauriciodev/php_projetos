<?php

function isPoli($word){
  if(!is_string($word)){
   echo "o parametro passado deve ser uma string";
  }else{
   $word = str_split($word);
   // revertendo array
   $reverseWord = array_reverse($word);

   if($word === $reverseWord){
     echo "é uma palavra polindroma";
   }else{
     echo "nao é uma palavra polindroma";
   }

  }

}
  isPoli("radar");
   
?>
