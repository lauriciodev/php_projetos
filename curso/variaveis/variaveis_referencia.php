<?php
// é possivel passar a referencia de variavel para uma nova, o valor atribuido a nova variavel ser tambem atribuido a variavel usada de referencia;

$x = 3;
$y =& $x;

echo "$x /// $y";
echo "<br>";
//nova atrubuição a variavel criada

$y = 4;

echo "$x /// $y";