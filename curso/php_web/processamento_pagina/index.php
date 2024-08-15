<?php
//  podemos usar a mesma pagina para renderizar o envio de um formulario 
//  para isso usa-se condições nas variaveis recebidas do servido;

$method = $_SERVER['REQUEST_METHOD'];

if(isset($_POST["nome"])){
  $nome = $_POST['nome'];
}

?>

<html>
<head>
 <title>Teste de envio formulario</title>
<head>
<body>
<?php
if($method == "GET"){
?>

<form action="index.php" method="POST">
   <input type="nome" name="nome" placeholder="seu nome"/>
   <input type="submit" value="enviar">
</form>

<?php
}else{
?>
<h4>O formulario foi enviado</h4>
<h3>Seu nome é <?= $nome ?></h3>
<?php
  }
?>
</body>
</html>
