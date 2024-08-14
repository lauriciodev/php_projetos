<?php
//comparando datas criadas com DateTime();
$dateA = new DateTime('2024-12-14 10:00:00');
$dateB = new DateTime('2024-12-24 10:00:00');

if($dateA < $dateB){
 echo "dayta a é menor";
}
?>