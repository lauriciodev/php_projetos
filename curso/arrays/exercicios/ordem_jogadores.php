<?php
//crie uma array de nomes com scores de joradores depoir exiba em uma lista ordenando pelo maior;

$players = [
  "Francisco" => 300,
  "Antonio" => 320,
  "Joao" => 540,
  "Raimundo" => 431,
  "Pedrinho" => 211
];

//ordenando pelo valor da chave em do maior para o menor
arsort($players);
?>

<table border colapse>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Score</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($players as $key => $value): ?>
    <tr>
      <td><?= $key; ?></td>
      <td><?= $value; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>