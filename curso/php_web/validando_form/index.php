<?php
// validações de formulario

$erros = [];

if(count($_POST) > 0){
  if($_POST["email"] === ""){
    array_push($erros, "por favor insira o email do usuario");
  }
    
  if($_POST["nome"] === ""){
    array_push($erros, "por vafor insira o nome do usuario");
  }
    
  if($_POST["senha"] === ""){
    array_push($erros, "por vafor insira uma senha");
  }else{
    
  if($_POST["confirmacao"] === ""){
    array_push($erros, "por favor confirme sua senha");
  }

  if($_POST["senha"] != "" && $_POST["confirmacao"] != ""){
    if($_POST["senha"] !== $_POST["confirmacao"]){
    {
      array_push($erros, "as senhas devem ser iguais");
    }
    }
  } 
}
}
?>

<html>
 <head>
  <title>validacao de formulario</title>
 </head>
<body>
<?php
foreach($erros as $iten){
  echo $iten . "<br>";
}


?>


   <form action="index.php" method="POST">
    <input type="text" name="nome" >
    <input type="text" name="email" >
    <input type="text" name="senha" >
    <input type="text" name="confirmacao" >
    <input type="submit" value="enviar">
  </form>
</body>
</html>
