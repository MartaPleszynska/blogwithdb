<?php
$postid = $_GET['postid'];
if($postid == NULL){
  $postid = 1;
}
include "connection.php";

$sql = "SELECT id, title, author, date_published, content FROM posts WHERE id=$postid;";

$result = $conn->query($sql);
if (!$result){
  echo $conn->error . ' Your sql was: ' . $sql;
}

$row = $result->fetch_assoc();

$myposttitle = $row['title'];
$mypostauthor = $row['author'];
$mypostdate = $row['date_published'];
$mypostcontent = $row['content'];

$pagecontent = "post";

include "_layouts/default.inc" ?>
