<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 01</title>
</head>
<body>
  <?php 
 // definindo  retorno da data em portugues;
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

  date_default_timezone_set('America/Sao_Paulo');

  echo strftime('%A, %d de %B de %Y', strtotime('today'));
  echo "<br>";
   $dataHoras = date("h:i:s a");
   // h horas no formato 12 horas 

   $dataDias = date("D:M:Y");
   // os parametros em maiusculo exibe o nome por completo

   echo $dataHoras;
   echo "<br>";
   echo $dataDias;
  ?>
  
</body>
</html>