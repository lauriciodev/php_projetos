<?php
if(isset($_FILES)){
  print_r($_FILES);
}
 
?>

<html>
 <head>
  <title>upload de arquivos</title>
 </head>
<body>
  <form action="index.php" method="POST" enctype="multipart/form-data">
     <input type="file" name="imagem">
    <input type="submit" value="enviar">
 </form>
</body>
</html>
