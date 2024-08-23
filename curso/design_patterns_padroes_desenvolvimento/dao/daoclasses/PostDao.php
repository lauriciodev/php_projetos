<?php
include_once "../models/Post.php";

class PostDao implements PostInterface{
  private $connection;

  public function __construct(PDO $connection){
    $this->connection = $connection;
  }
 public function create(Post $post){
   $stmt = $this->connection->prepare("INSERT INTO posts (post_title, post_content, post_picture)  VALUES (:post_title, :post_content, :post_picture)");
   $stmt->bindParam(":post_title", $post->getPostTitle());
   $stmt->bindParam(":post_content", $post->getPostContent());
   $stmt->bindParam(":post_picture", $post->getPostPicture());
 }
 public function findAll(){

 }
}


?>