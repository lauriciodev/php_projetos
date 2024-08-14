<?php 
// podemos verificar se um classe existe usando o metodo "class_exists"
// podemos obter as propriedadese metodos  usando -=> get_class_vars e get_class_methods



class Pessoa {
public $nome = "lauricio";
public $idade = 22;


public function sayName(){
  echo $this->nome;
}

public function sayAge(){
  echo $this->idade;
}
  
}


//verificando se classe existe
if(class_exists("Pessoa")){
  echo "classe pessoa existe";
}
echo "<br>";

//exibindo propriedades
print_r(get_class_vars("Pessoa"));

echo "<br>";
//exibindo metodos
print_r(get_class_methods("Pessoa"));

?>