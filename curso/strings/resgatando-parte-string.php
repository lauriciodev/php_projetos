<?php 
// para resgatar partes especificas de uma string use substr(str, incio, fim);
//str string que vamos procurar algo.
//inicio é o indice inicial da palavra ou texto.
// fim é o indicie final da palvra ou texto.

$str = "esta é a minha string de exemplo";

$myStr = substr($str,10,5);

echo $str;
echo "<br>";
echo $myStr;
//caso seja omitido o ultimo parametro o metodo ira retornar a string apartir do parametro
//inicial até o ultimo;

?>
