<?php

function defaultParamter($b, $a = "padrao"){
    echo "parametro 01 = $a parametro 02 = $b";
}
//no caso de mai de 1 parametro os arametros obrigatorios devem sempre vir antes
//dos parametros com valor padrao

defaultParamter(2);


?>