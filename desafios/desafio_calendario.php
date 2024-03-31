<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  table{
    width:500px;
    border-colapse:colapse;
    text-align:center;
  }

  table tr:first-child{
    background-color:black;
    color:white;
  }
</style>

  <body>
    <?php
     // desafio: exiba uma suadação de acordo com a hora do dia;

     function sendSaudation($hour){
       if($hour <= 12){
        echo "bom dia!";
       }
       
       if($hour > 12){
        echo "boa tarde!";
       }
       
       if($hour > 18){
        echo "boa noite!";
       }

     }


     sendSaudation(date("H"));
   ?>
  <h1>Calendario PHP</h1>
  <table border="1">
      <tr>
        <td>dom</td>
        <td>seg</td>
        <td>ter</td>
        <td>qua</td>
        <td>qui</td>
        <td>sex</td>
        <td>sab</td>
      </tr>

 

      <?php

      function Linha($semana){
        $currentDay = date("d");
      
        
      echo "<tr>";
    for($i = 0; $i <= 6; $i++){

     

      if(isset($semana[$i])){
        if($currentDay == $semana[$i]){
          echo "<td style='color:white; background-color:#000;'>{$semana[$i]}</td>";
        
        }else{
          if($semana[$i] == 0){
            echo "<td style='color:red;'>{$semana[$i]}</td>";

          }else{
            echo "<td style='background-color:#3c1c3c; color:white;'>{$semana[$i]}</td>";

          }

        }

      
      }else{
        echo "<td style='background-color:#3c1c3c; color:white;'></td>";
      }

   
    }
        echo "</tr>";
      
      }

      function Calendario(){
        $dia = 1;
        $semana = array();

        while($dia <= 31){
          array_push($semana, $dia);

          if(count($semana ) == 7){
            Linha($semana);
          $semana = array();
          }

        
          $dia++;
        }

        Linha($semana);
  
      }


    ?>
      <?php Calendario(); ?>


    </table>
  
</body>

</html>
