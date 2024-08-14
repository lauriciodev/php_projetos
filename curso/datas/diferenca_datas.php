<?php
// podemos obter a diferença entre datas como o metodo diff;
// o resultado pode ser formatado com format;
// exemplo: 

$dateA = new DateTime('2024-12-14 10:00:00');
$dateB = new DateTime('2024-12-24 10:00:00');

$difenca = $dateA->diff($dateB);

var_dump($difenca);

echo $difenca->format("%a days");
?>