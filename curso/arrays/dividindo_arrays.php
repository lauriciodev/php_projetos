<?php

$myArr = range(1,20);

$arr = array_chunk($myArr,4);
var_dump($arr);
/* array(5) { [0]=> array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) } [1]=> array(4) { [0]=> int(5) [1]=> int(6) [2]=> int(7) [3]=> int(8) } [2]=> array(4) { [0]=> int(9) [1]=> int(10) [2]=> int(11) [3]=> int(12) } [3]=> array(4) { [0]=> int(13) [1]=> int(14) [2]=> int(15) [3]=> int(16) } [4]=> array(4) { [0]=> int(17) [1]=> int(18) [2]=> int(19) [3]=> int(20) } } */