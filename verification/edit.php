<?php
// Library & Connection
include("../library/functions.php");
$con = connect("disaster");
if(!$con) return header("Location: ../newPost.php?error=Couldn't connect to database.");

// Editing the post
update("post", "title", $_POST['title'], $_GET['pid'], $con);
update("post", "body", $_POST['body'], $_GET['pid'], $con);

// redirecting user to home
header("Location: ../home.php");

?>