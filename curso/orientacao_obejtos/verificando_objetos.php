<?php
// metodos que ajudam a entender melhor os objetos

// id_object =>  verifica se uma variavel é um objeto;
// get_class => verifica a classe de um objeto;
// method_exists => verifica se um methodo existe em um objeto;

class Escola {

  public function autoDestruir(){
    // metodo teste
  }
}

$centroDeEnsino = new Escola();

if(is_object($centroDeEnsino )){
echo "escola é um objeto <br>";
}

//retorna a class de um objeto em questão]

echo get_class($centroDeEnsino) . "<br>";


//verificando se metodos existe
if(method_exists($centroDeEnsino, "autoDestruir")){
  echo "metodo autodestruir existe <br>";
}


?>