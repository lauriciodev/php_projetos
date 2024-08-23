<?php

include_once "connection.php";

?>

<h1>Insira um post </h1>
<form action="process.php" method="POST">
  <input type="text" name="post_title">
  <input type="text" name="post_content">
  <input type="text" name="post_picture">

  <input type="submit" value="criar post">
</form>