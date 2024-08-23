<?php
// pdo conexão com o banco de dados

$database = "blog_tec";
$host = "localhost";
$user = "root";
$password = "zxc123";

$connection = new PDO("mysql:dbname=$database; host=$host", $user, $password);

?>