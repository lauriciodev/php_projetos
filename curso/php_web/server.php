<?php
// server informações do servidor

//SERVER_SOFTWARE = IDENTIFICAÇÃO DO SERVIDOR;
//SERVER_NAME = HOSTNAME, DNS OU IP DO SERVIDOR
//SERVER_PROTOCOL = PROTOCOLO DO SERVIDOR
//SERCER_PORT = PORTA DO SERVIDOR
//QUERY_STRING = ARGUMENTOS APOS O ? NA URL;


ECHO $_SERVER["SERVER_NAME"] . "<br>";
//localhost

if($_SERVER["SERVER_NAME"] == "localhost"){
  echo "voce esta acessando na sua rede local";
}
?>
