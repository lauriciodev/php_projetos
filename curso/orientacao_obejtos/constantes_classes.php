<?php
// dentro de classes podemos declarar valores que nao serão alterado ao longo do codigo -> são chamadas de constastes e geralmente são escritas em maiuscula;.



class Funcionario {
   public const BENEFICIOS = true;
   // acima esta uma constante que nao será alterada
   
   // para acessar uma constande dentro de um metodo  usa-se self:: 

   function showBeneficios(){
    echo self::BENEFICIOS;
   }
}

//acessando constantes;

$lauricio = new Funcionario();

// usa-se "::" para acessar constantes dentro de classes;
echo  $lauricio::BENEFICIOS;

?>