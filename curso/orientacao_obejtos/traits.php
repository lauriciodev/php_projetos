<?php
//as traits permitem o reuso do codigo sem hierarquia de classes ou seja sem herança.
// podemos então usar metodos da classe que foi feita a trait.
//usamo a plavra reservada "use"

trait Carro2 {
    public function showModel() {
        echo "O modelo deste é uma Hilux 2025";
    }
}

class Caminhonete {
    use Carro2;
}

$caminhonete = new Caminhonete();
$caminhonete->showModel();
?>