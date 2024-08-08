<?php
//crie um array  com nomes e idades e depois imprima uma tabela com esses valores

$pessoas = [
  "maria" => 33,
  "ksandrea" => 22,
  "julia" => 26,
  "marcia" => 56,
  "dalia" => 21
];

   ?>
<table>
  <thead>
    <tr>
      <th>nome</th>
      <th>idade</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($pessoas as $chave => $valor): ?>
    <tr>
      <td><?= $chave;  ?></td>

      <td><?= $valor; ?></td>
    </tr>
    <?php endforeach;  ?>
  </tbody>
</table>