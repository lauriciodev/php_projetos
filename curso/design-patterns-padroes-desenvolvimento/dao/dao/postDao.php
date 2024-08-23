<?php
include_once "models/Post.php";

class PostDao implements PostInterface {
  private $connection;

  public function __construct(PDO $connection){
    $this->connection = $connection;
  }
 public function create(Post $post){
   $stmt = $this->connection->prepare("INSERT INTO posts (post_title, post_content, post_picture)  VALUES (:post_title, :post_content, :post_picture)");
   $post_content = $post->getPostContent();
   $post_title = $post->getPostTitle();
   $post_picture = $post->getPostPicture();
   $stmt->bindParam(":post_title", $post_title);
   $stmt->bindParam(":post_content", $post_content);
   $stmt->bindParam(":post_picture", $post_picture);

   $stmt->execute();
 }
 public function findAll(){
//execultando query
$stmt = $this->connection->query("SELECT * FROM  posts");

$posts = [];

$data = $stmt->fetchAll();


foreach($data as $myPosts){

$post = new Post();

$post->setPostTitle($myPosts["post_title"]);
$post->setPostContent($myPosts["post_content"]);
$post->setPostPicture($myPosts["post_picture"]);

$posts[] = $post;
}

return $posts;
 }
}