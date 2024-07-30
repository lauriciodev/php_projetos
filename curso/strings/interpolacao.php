<?php
//interpolação de strings

//para interpolar uma steing usa-se : {$my_string} ou $my_string

//valores de scape

// /n = nova linha

// modificando interpretação de texto de html para texto puro 
header("Content-type: text/plain");

echo "primeira linha \n segunda linha";

  //para imprimir qualquer caractere especial usa uma bara invertida antes;
  //exemplo;
   
  //echo "imprimindo barra inverida \\ \n";

// Exemplo de uma string contendo uma barra invertida
$string = "Este é um exemplo de barra invertida: \\";
echo $string; // Saída: Este é um exemplo de barra invertida: \
?>
