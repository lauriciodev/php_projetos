<?php
// sessoes são formas de armazaenarmos valores de forma global
// assim esses valores podem ser acessados em outras paginas
// sessões devem ser ininciadas no inicio da pagina

session_start(); //inicando session
$_SESSION["nome"] = "lauricio"; //adicionando valores a uma session

?>

<html>
 <head>
    <title>sessões</title>
 </head>
<body>
   <h3>aprendendo sobre sessoes</h3>
<?php
echo $_SESSION["nome"];

?>

</body>
</html>
