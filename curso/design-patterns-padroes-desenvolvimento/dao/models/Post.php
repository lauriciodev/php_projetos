<?php
  class Post{

  private $post_id;
  private $post_content;
  private $post_title;
  private $post_picture;

//methods

public function getPostId(){
  return $this->post_id;
}

public function setPostId($id){
  $this->post_id = $id;
}

public function getPostContent(){
return $this->post_content;
}

public function setPostContent($content){
   $this->post_content = $content;
}

public function getPostTitle(){
  return $this->post_title;
}

public function setPostTitle($title){
  $this->post_title = $title;
}

public function getPostPicture(){
  return $this->post_picture;
}

public function setPostPicture($picture){
  $this->post_picture = $picture;
}

}

interface PostInterface{
  public function create(Post $pos);
  public function findAll();
}
  
?>