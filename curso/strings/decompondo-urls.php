<?php
// para decompor uma url (pegar partes especificas) usamos o metodo parse_url();
// este metodo retona um array com todas as partes da url (protocolo, host, parametros);

$myUrl = "https://www.google.com/?nome=lauricio&idade=22";

$parsed = parse_url($myUrl);

var_dump($parsed);
?>