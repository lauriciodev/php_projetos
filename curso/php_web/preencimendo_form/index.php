<?php
//podemos setar dados nos valores de input
//dados mockados

$usuario = [
  "nome" => "lauricio",
  "idade" => "33",
  "profissao" => "programador"
];

if($usuario){
  $nome = $usuario["nome"];
  $idade = $usuario["idade"];
  $profissao = $usuario["profissao"];
}
?>


<html>
 <head>
   <title>form</title>
 </head>
 
<body>
  <form>
  <input type="text" value="<?= $nome?>" />
  <input type="submit" value="enviar"/>
 </form>
</body>
</html>
