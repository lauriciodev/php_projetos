<?php
// os coockies são strings que contem informações
// a função para adicionair um cookie é setcookie;
// a função deve ser chamada antes do corpo da pagina, pois envia os dados como header
// (cabeçalho);

//o coockie leva como dado: nome, valor e data de expiração;
//podemos acessar os cookies de volta com $_COOKIE;


//setando cookie

setcookie("nome","lauricio",time() + 3600); 

if(isset($_COOKIE["nome"])){
  $nome = $_COOKIE["nome"];
};
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <title>Cookies</title>
 </head>
 <body>
<?php 
if(isset($nome) && $nome != ""){
  echo "<h3>Seja bem vindo $nome </h3>";
}else{

    echo "<h3>Ola mundo<h3>";
}
?>
 </body>
</html>

