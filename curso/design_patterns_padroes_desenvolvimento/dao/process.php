<?php

include_once "connection.php";
include_once "daoclasses/PostDao.php  ";
include_once "models/Post.php";


$post = new PostDao($connection);

$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];
$post_picture = $_POST["post_picture"];

$newPost = new Post();

$newPost->setPostTitle($post_title);
$newPost->setPostContent($post_content);
$newPost->setPostPicture($post_picture);

$post->create($newPost);

header("Location: index.php");
?>