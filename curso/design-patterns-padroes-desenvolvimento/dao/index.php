<?php
require_once("connection.php");
include_once("dao/postDao.php");

$post = new PostDao($connection);

$myPosts = $post->findAll();  
?>

<h1>Insira um post </h1>
<form action="process.php" method="POST">
  <input type="text" name="post_title">
  <input type="text" name="post_content">
  <input type="text" name="post_picture">

  <input type="submit" value="criar post">
</form>


<?php foreach ($myPosts as $value): ?>
<div style="border:1px solid black; max-width:300px;">
  <p><?= $value->getPostTitle() ?></ p>
  <p><?= $value->getPostContent() ?></ p>
  <p><?= $value->getPostPicture() ?></ p>
</div>
<?php endforeach ?>