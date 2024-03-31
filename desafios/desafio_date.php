<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 01</title>
</head>
<body>
  <?php 
  //desafio
  //exibir quantos dias faltam pra sabado
  
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

  date_default_timezone_set('America/Sao_Paulo');

  $diaSemana =  strftime('%A');

  function showDay($dia){
      //esta função vai retornar a quantidade de dias que faltam para sabado;

      if($dia == "domingo"){
        return  6;
      }

      if($dia == "segunda"){
        return  5;
      }

      if($dia == "terça"){
        return  4;
      }

      if($dia == "quarta"){
        return  3;
      }

      if($dia == "quinta"){
        return  2;
      }

      if($dia == "sexta"){
        return  1;
      }
  }
  $daysToSun = showDay($diaSemana);
  $currentMounth = strftime("%B");
  echo $currentMounth;
  echo "<br>";
  echo "faltam $daysToSun dias pra sábado";

  ?>
  
</body>
</html>