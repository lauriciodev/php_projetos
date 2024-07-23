<?php
// podem ser passados parametros padrão para uma variavel esse valor padrao sera atribuido apenas se nenhum valor for passado.

function dafParam($myPar = "exemple"){
 echo "meu parametro é : $myPar";
}

dafParam();
echo "<br>passando parametro <br>";
dafParam("parametro");
echo "<br>";
echo "no caso de dois parametros e apenas o primeiro obrigatorio  sera exibido o seguinte erro";

function twoParam($first = "first",$second){
  echo "primeiro = $first <br> segundo =  $second";
}

//twoParam("teste ");

echo "uma boa pratica é inserir todos os parametros obrigatorios apos os parametros padrao";