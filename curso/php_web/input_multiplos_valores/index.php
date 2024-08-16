<?php
 // podemos receber multiplos valores de um input do tipo checkbox apenas adcionando [] ao final
 // do name de referencia 
 // ex:  "ingredientes[]"

if(isset($_POST["ingredientes"])){
  $ingredientes = $_POST['ingredientes'];
 print_r($ingredientes);
}

?>

<html>
  <head>
 <title>teste de envio de form</title>
  </head>
  <body>
    <form action="index.php" method="POST"> 
      
       <div>
      <input type="checkbox" name="ingredientes[]" value="maça">maça
       </div>
       <div>
      <input type="checkbox" name="ingredientes[]" value="cenoura">cenoura
       </div>
       <div>
      <input type="checkbox" name="ingredientes[]" value="beteraba">beterraba
       </div>
       <div>
      <input type="checkbox" name="ingredientes[]" value="batata">batata
       </div>
       <div>
      <input type="checkbox" name="ingredientes[]" value="alface">alface
       </div>

      <input type="submit" value="enviar">
    </form>
  </body>
</html>
