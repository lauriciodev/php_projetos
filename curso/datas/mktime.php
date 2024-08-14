<?php
// mktime pode criar datas, basta passar como parametros as informações de uma data.

$date = mktime(01,19,00,03,12,2023);
echo date("d/m/y", $date);

?>