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
        echo "
        <tr>
         <td>{$semana[0]}</td>
         <td>{$semana[1]}</td>
         <td>{$semana[2]}</td>
         <td>{$semana[3]}</td>
         <td>{$semana[4]}</td>
         <td>{$semana[5]}</td>
         <td>{$semana[6]}</td>
        </tr>
        ";
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